<?php

namespace App\Http\Controllers\Api;

use App\Models\Item;

class ItemController extends BaseController
{
    public function __construct()
    {
        $this->classe = Item::class;
    }
}
