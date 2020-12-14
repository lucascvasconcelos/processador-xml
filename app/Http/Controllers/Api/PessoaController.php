<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use App\Services\PessoaService;

class PessoaController extends CrudController
{
    public function __construct(PessoaService $service)
    {
        parent::__construct($service);
    }
}
