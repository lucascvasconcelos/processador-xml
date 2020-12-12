<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessaImportacao;
use App\Services\PessoaService;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    private $pessoaService;

    private $processaImportacao;

    public function __construct(PessoaService $pessoaService)
    {
        $this->pessoaService = $pessoaService;
    }

    /**
     * @param Request $request
     */
    public function uploadXml(Request $request)
    {
        dispatch(new ProcessaImportacao($this->parseXmlToArray($request->file('arquivo'))));
    }

    private function parseXmlToArray($file)
    {
        $xml = simplexml_load_file($file);
        $json_string = json_encode($xml);

        return json_decode($json_string, TRUE);
    }
}
