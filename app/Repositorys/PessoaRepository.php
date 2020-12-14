<?php

namespace App\Repositorys;

use App\Models\Pessoa;

class PessoaRepository extends CrudRepository
{
    public function __construct()
    {
        $this->classe = Pessoa::class;
    }
}
