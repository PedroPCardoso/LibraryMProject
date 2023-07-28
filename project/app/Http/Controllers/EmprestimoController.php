<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmprestimoServices;
use App\Models\Emprestimo;
class EmprestimoController extends BaseController
{
       /**
     * @var EmprestimoServices
     */
    private $emprestimoServices = null;

    public function __construct( EmprestimoServices $emprestimoServices)
    {

        $this->emprestimoServices = $emprestimoServices;
    }

    public function index(Request $request){
        $params = $request->all();
        $emprestimos = $this->emprestimoServices->filterAll($params);
        if($emprestimos->isNotEmpty()){
            return $this->sendResponse($emprestimos->toArray(), 'Emprestimos Encontrados');
        }
        else {
            return $this->sendError('Nenhum Emprestimo Encontrado');

        }
    }

    public function show(){

    }
    public function store(Request $request){

        $emprestimo = $this->emprestimoServices->create($request->all());        
        if($emprestimo){

            return $this->sendResponse($emprestimo, 'Emprestimo criado com sucesso!');
        }
        else {
            return $this->sendError('Erro ao criar emprestimo - O livro ou o usuario pussuem emprestimos ativos.');
        }
    }
    public function update(Emprestimo $emprestimo){

        $emprestimo = $this->emprestimoServices->update($emprestimo); 
        return $this->sendResponse($emprestimo, 'Emprestimo atualizado com sucesso!');
        
    
    }
}
