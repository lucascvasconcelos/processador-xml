<?php

namespace App\Http\Controllers\Api;

use App\Models\Shiporder;

class ShiporderController extends BaseController
{
    public function __construct()
    {
        $this->classe = Shiporder::class;
    }
}
