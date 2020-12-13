<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'phones'];

    protected $table = 'pessoas';

    private $id;

    private $name;

    private $phones;

    public function phones(){
        return $this->hasMany(Phone::class);
    }

    public function shiporder(){
        return $this->belongsTo(Shiporder::class);
    }

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
    public function setId($id): Pessoa
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
    public function setName($name): Pessoa
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
    public function setPhones($phones): Pessoa
    {
        $this->phones = $phones;

        return $this;
    }

    public function getPhonesAttribute() {
        return $this->phones();
    }
}
