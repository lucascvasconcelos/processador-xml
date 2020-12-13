<?php

namespace App\Builders;

use App\Models\Pessoa;
use App\Models\Shipto;

class ShiptoBuilder
{
    public function buildEntity(array $shiptoArray)
    {
        return Shipto::create([
            'name' => $shiptoArray['name'],
            'address' => $shiptoArray['address'],
            'city' => $shiptoArray['city'],
            'country' => $shiptoArray['country']
        ]);
    }
}
