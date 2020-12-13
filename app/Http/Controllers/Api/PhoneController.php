<?php

namespace App\Http\Controllers\Api;

use App\Models\Phone;

class PhoneController extends BaseController
{
    public function __construct()
    {
        $this->classe = Phone::class;
    }
}
