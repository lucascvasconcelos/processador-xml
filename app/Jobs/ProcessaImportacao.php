<?php

namespace App\Jobs;

use App\Services\PessoaService;
use App\Services\ShiporderService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessaImportacao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $realPathPersonXml;

    protected $realPathEncomendaXml;

    /**
     * ProcessaImportacao constructor.
     */
    public function __construct($realPathPersonXml, $realPathEncomendaXml)
    {
        $this->realPathPersonXml = $realPathPersonXml;
        $this->realPathEncomendaXml = $realPathEncomendaXml;
    }

    /**
     * @param PessoaService $pessoaService
     */
    public function handle(PessoaService $pessoaService, ShiporderService $shiporderService)
    {
        echo "Iniciando processamento..." . PHP_EOL;
        $pessoaService->populatePessoas($this->parseXmlToArray($this->realPathPersonXml));
        $shiporderService->populateShiporders($this->parseXmlToArray($this->realPathEncomendaXml));
        echo "Processamento finalizado!" . PHP_EOL;
    }

    private function parseXmlToArray($file)
    {
        $xml = simplexml_load_file($file);
        $json_string = json_encode($xml);

        return json_decode($json_string, TRUE);
    }
}
