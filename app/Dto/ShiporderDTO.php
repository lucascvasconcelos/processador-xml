<?php

namespace App\Dto;

class ShiporderDTO
{
    private $id;

    private $pessoa;

    private $shipto;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * @param mixed $pessoa
     */
    public function setPessoa($pessoa): void
    {
        $this->pessoa = $pessoa;
    }

    /**
     * @return mixed
     */
    public function getShipto()
    {
        return $this->shipto;
    }

    /**
     * @param mixed $shipto
     */
    public function setShipto($shipto): void
    {
        $this->shipto = $shipto;
    }
}
