<?php

namespace App\Services;

use App\Models\Emprestimo;
use App\Repositories\EmprestimoRepository;
use Carbon\Carbon;
class EmprestimoServices {


    public function __construct(EmprestimoRepository $repository) {
        $this->repository = $repository;
    }
    
    public function filterAll($params){

        return $this->repository->allQuery($params)->get();
    }
    public function create($data) {

        if(!$this->haEmprestimosAtivosDoLivro($data) && !$this->haEmprestimosAtivosDoUsuario($data)
        && !$this->HaEmprestimosAtrasadosDoUsuario($data) && !$this->haEmprestimosAtrasadosDoLivro($data)
        ){

            $emprestimo = $this->repository->create(          
                [
                'user_id'=>$data['user_id'],
                'livro_id'=>$data['livro_id'],
                'data_inicio'=>isset($data['data_inicio']) ? $data['data_inicio'] : Carbon::now(),
                'data_fim'=> Carbon::now()->addDays(Emprestimo::PRAZO_LIMITE_EM_DIAS),
                'status'=>Emprestimo::STATUS_EMPRESTADO
                ]
            );
    
            return $emprestimo;
        }
        else {
            return false;
        }
    
    }

    public function update($data){
        $emprestimo = $this->repository->update(          
                        [
                        'data_da_devolucao'=> Carbon::now(),
                        'status'=>Emprestimo::STATUS_FINALIZADO
                        ],$data['id']
                    );
        return $emprestimo;
    }

    private function haEmprestimosAtivosDoLivro($data) {
        return $this->repository->allQuery(
        [
        'livro_id'=>$data['livro_id'],
        'status'=>Emprestimo::STATUS_EMPRESTADO
        ])->count() > 0;

    }

    private function haEmprestimosAtivosDoUsuario($data) {
        return $this->repository->allQuery(
        [
        'user_id'=>$data['user_id'],
        'status'=>Emprestimo::STATUS_EMPRESTADO
        ])->count() > 0;

    }
    private function HaEmprestimosAtrasadosDoUsuario($data){

        return $this->repository->allQuery(
        [
        'user_id'=>$data['user_id'],
        'status'=>Emprestimo::STATUS_ATRASADO
        ])->count() > 0;

    }

    private function haEmprestimosAtrasadosDoLivro($data) {
        return $this->repository->allQuery(
        [
        'livro_id'=>$data['livro_id'],
        'status'=>Emprestimo::STATUS_ATRASADO
        ])->count() > 0;

    }
}