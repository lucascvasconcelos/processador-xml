<?php

namespace App\Http\Controllers\Api;

use App\Models\Shipto;
use App\Services\ShiptoService;

class ShiptoController extends CrudController
{
    public function __construct(ShiptoService $service)
    {
        parent::__construct($service);
    }
}
