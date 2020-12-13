<?php

namespace App\Http\Controllers;

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
     * @param Request $request
     */
    public function uploadXml(Request $request)
    {
        $pathPerson = $request->file('file-person')->store('arquivo');
        $realPathPerson = "/var/www/storage/app/" . $pathPerson;
        $pathEncomenda = $request->file('file-encomenda')->store('arquivo');
        $realPathEncomenda = "/var/www/storage/app/" . $pathEncomenda;

        dispatch(new ProcessaImportacao($realPathPerson, $realPathEncomenda));
    }
}
