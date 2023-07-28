<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\EmprestimoRepository;
use App\Helper\EmprestimosHelper;

class atualizarEmprestimos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:atualizarEmprestimos';

    private $emprestimoRepository=null;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Atualizar todos os emprestimos pendentes fora do prazo para atrasados';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(EmprestimoRepository $emprestimoRepository)
    {
        $this->emprestimoRepository = $emprestimoRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $emprestimos = $this->emprestimoRepository->allQuery()->get();
        EmprestimosHelper::AtualizarStatusParaPendente($emprestimos);        //
    }
}
