<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'pessoa'];
    protected $table = 'phones';

    public $number;

    public $pessoa;

//    public function __construct($number, $pessoa)
//    {
//        $this->number = $number;
//        $this->pessoa = $pessoa;
//    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa');
    }
        /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
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
}
