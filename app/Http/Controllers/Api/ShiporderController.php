<?php

namespace App\Http\Controllers\Api;

use App\Services\ShiporderService;

class ShiporderController extends CrudController
{
    public function __construct(ShiporderService $service)
    {
        parent::__construct($service);
    }
}
