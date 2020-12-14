<?php

namespace App\Services;

use App\Builders\PessoaBuilder;
use App\Builders\PhoneBuilder;
use App\Repositorys\PessoaRepository;

class PessoaService extends CrudService
{
    private $pessoaBuilder;

    private $phoneBuilder;

    public function __construct(PessoaBuilder $pessoaBuilder, PhoneBuilder $phoneBuilder, PessoaRepository $repository)
    {
        parent::__construct($repository);
        $this->pessoaBuilder = $pessoaBuilder;
        $this->phoneBuilder = $phoneBuilder;
    }

    public function populatePessoas(array $pessoas)
    {
        foreach ($pessoas['person'] as $pessoa) {
            $pessoaDto = $this->pessoaBuilder->buildDto($pessoa);
            $this->pessoaBuilder->buildEntity($pessoaDto);
            $this->phoneBuilder->build($pessoa, $pessoaDto->getPhones());
        }
    }
}
