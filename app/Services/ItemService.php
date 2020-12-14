<?php

namespace App\Services;

use App\Repositorys\ItemRepository;

class ItemService extends CrudService
{
    public function __construct(ItemRepository $repository)
    {
        parent::__construct($repository);
    }
}
