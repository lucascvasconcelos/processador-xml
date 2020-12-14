<?php

namespace App\Services;

use App\Repositorys\ShiptoRepository;

class ShiptoService extends CrudService
{
    public function __construct(ShiptoRepository $repository)
    {
        parent::__construct($repository);
    }
}
