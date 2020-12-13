<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;

class PessoaController extends BaseController
{
    public function __construct()
    {
        $this->classe = Pessoa::class;
    }
}
