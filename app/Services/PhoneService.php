<?php

namespace App\Services;

use App\Repositorys\PhoneRepository;

class PhoneService extends CrudService
{
    public function __construct(PhoneRepository $repository)
    {
        parent::__construct($repository);
    }
}
