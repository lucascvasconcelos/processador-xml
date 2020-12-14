<?php

namespace App\Repositorys;

use App\Models\Phone;

class PhoneRepository extends CrudRepository
{
    public function __construct()
    {
        $this->classe = Phone::class;
    }
}
