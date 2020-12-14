<?php

namespace App\Repositorys;

use App\Models\Shiporder;

class ShiporderRepository extends CrudRepository
{
    public function __construct()
    {
        $this->classe = Shiporder::class;
    }
}
