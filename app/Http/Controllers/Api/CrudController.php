<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CrudService;
use App\Services\PessoaService;

class CrudController extends Controller
{
    protected $service;

    public function __construct(CrudService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->all();
    }
}
