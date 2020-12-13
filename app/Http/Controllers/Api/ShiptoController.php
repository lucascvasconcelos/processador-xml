<?php

namespace App\Http\Controllers\Api;

use App\Models\Shipto;

class ShiptoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Shipto::class;
    }
}
