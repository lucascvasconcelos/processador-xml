<?php

namespace App\Dto;

class PessoaDTO
{
    private $id;

    private $name;

    private $phones;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id): PessoaDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name): PessoaDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param $phones
     * @return $this
     */
    public function setPhones($phones): PessoaDTO
    {
        $this->phones = $phones;

        return $this;
    }
}
