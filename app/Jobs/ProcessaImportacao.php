<?php

namespace App\Jobs;

use App\Services\PessoaService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class ProcessaImportacao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $pessoas;

    /**
     * ProcessaImportacao constructor.
     */
    public function __construct($pessoas)
    {
        $this->pessoas = $pessoas;
    }

    /**
     * @param PessoaService $pessoaService
     */
    public function handle(PessoaService $pessoaService)
    {
        echo "Iniciando processamento..." . PHP_EOL;
        $pessoaService->populatePessoas($this->pessoas);
        echo "Processamento finalizado!" . PHP_EOL;
    }
}
