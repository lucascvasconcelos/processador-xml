<?php

namespace App\Repositorys;

class CrudRepository
{
    protected $classe;

    public function all()
    {
        return $this->classe::all();
    }
}
