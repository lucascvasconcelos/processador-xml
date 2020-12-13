<?php

namespace App\Http\Controllers;

use App\Http\Requests\XmlRequest;
use App\Jobs\ProcessaImportacao;
use App\Services\PessoaService;
use App\Services\ShiporderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    private $pessoaService;

    private $processaImportacao;

    private $shiporderService;

    public function __construct(PessoaService $pessoaService, ShiporderService $shiporderService)
    {
        $this->pessoaService = $pessoaService;
        $this->shiporderService = $shiporderService;
    }

    /**
     * @param XmlRequest $request
     */
    public function uploadXml(XmlRequest $request)
    {
        $fullPath = "/var/www/storage/app/";
        $pathPerson = $request->file('file-person')->store('arquivo');
        $realPathPerson = $fullPath . $pathPerson;
        $pathEncomenda = $request->file('file-encomenda')->store('arquivo');
        $realPathEncomenda = $fullPath . $pathEncomenda;

        dispatch(new ProcessaImportacao($realPathPerson, $realPathEncomenda));
    }
}
