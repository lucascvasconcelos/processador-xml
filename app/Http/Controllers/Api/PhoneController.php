<?php

namespace App\Http\Controllers\Api;

use App\Services\PhoneService;

class PhoneController extends CrudController
{
    public function __construct(PhoneService $service)
    {
        parent::__construct($service);
    }
}
