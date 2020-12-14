<?php

namespace App\Repositorys;

use App\Models\Shipto;

class ShiptoRepository extends CrudRepository
{
    public function __construct()
    {
        $this->classe = Shipto::class;
    }
}
