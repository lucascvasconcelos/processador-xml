<?php

namespace App\Repositorys;

use App\Models\Item;

class ItemRepository extends CrudRepository
{
    public function __construct()
    {
        $this->classe = Item::class;
    }
}
