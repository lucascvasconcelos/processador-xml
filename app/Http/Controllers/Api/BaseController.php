<?php

namespace App\Http\Controllers\Api;

abstract class BaseController
{
    protected $classe;

    public function index()
    {
        return $this->classe::all();
    }
}
