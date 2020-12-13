<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shiporder extends Model
{
    use HasFactory;

    protected $table = 'shiporders';
    protected $fillable = ['pessoa', 'id', 'shipto_id'];

    private $id;

    private $pessoa;

    public function shipto(){
        return $this->belongsTo(Shipto::class);
    }

    public function pessoa(){
        return $this->hasOne(Pessoa::class, 'pessoa');
    }

    public function items(){
        return $this->hasMany(Item::class);
    }

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
}
