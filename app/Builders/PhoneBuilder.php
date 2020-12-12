<?php

namespace App\Builders;

use App\Models\Phone;

class PhoneBuilder
{
    public function build($pessoa, $phones)
    {
        if (is_countable($phones)) {
            foreach ($phones as $phone) {
                Phone::create([
                   'number' => $phone,
                   'pessoa' => (int) $pessoa['personid']
                ]);
            }
        } else {
            Phone::create([
                'number' => $phones,
                'pessoa' => (int) $pessoa['personid']
            ]);
        }
    }
}
