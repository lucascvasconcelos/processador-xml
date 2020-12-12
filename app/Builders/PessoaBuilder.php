<?php

namespace App\Builders;

use App\Dto\PessoaDTO;
use App\Models\Pessoa;

class PessoaBuilder
{
    private $phoneBuilder;

    public function __construct(PhoneBuilder $phoneBuilder)
    {
        $this->phoneBuilder = $phoneBuilder;
    }

    public function buildDto(array $pessoa)
    {
        return (new PessoaDTO())
            ->setId((int) $pessoa['personid'])
            ->setName($pessoa['personname'])
            ->setPhones($pessoa['phones']['phone']);
    }

    public function buildEntity(PessoaDTO $pessoaDTO)
    {
        Pessoa::create([
            'id' => $pessoaDTO->getId(),
            'name' => $pessoaDTO->getName()
        ]);
    }
}
