<?php

namespace App\Services;

use App\Repositorys\CrudRepository;

class CrudService
{
    protected $repository;

    public function __construct(CrudRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all() {
        return $this->repository->all();
    }
}
