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

    protected $realPathPersonXml;

    /**
     * ProcessaImportacao constructor.
     */
    public function __construct($realPathPersonXml)
    {
        $this->realPathPersonXml = $realPathPersonXml;
    }

    /**
     * @param PessoaService $pessoaService
     */
    public function handle(PessoaService $pessoaService)
    {
        echo "Iniciando processamento..." . PHP_EOL;
        $pessoaService->populatePessoas($this->parseXmlToArray($this->realPathPersonXml));
        echo "Processamento finalizado!" . PHP_EOL;
    }

    private function parseXmlToArray($file)
    {
        $xml = simplexml_load_file($file);
        $json_string = json_encode($xml);

        return json_decode($json_string, TRUE);
    }
}
