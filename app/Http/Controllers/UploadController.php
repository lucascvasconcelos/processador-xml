<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessaImportacao;
use App\Services\PessoaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $pathPerson = $request->file('file-person')->store('arquivo');
        $realPathPerson = "/var/www/storage/app/" . $pathPerson;

        dispatch(new ProcessaImportacao($realPathPerson));
    }


}
