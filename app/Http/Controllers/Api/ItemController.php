<?php

namespace App\Http\Controllers\Api;

use App\Services\ItemService;

class ItemController extends CrudController
{
    public function __construct(ItemService $service)
    {
        parent::__construct($service);
    }
}
