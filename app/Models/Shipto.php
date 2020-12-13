<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipto extends Model
{
    use HasFactory;
    protected $table = 'shiptos';
    protected $fillable = ['name', 'address', 'city', 'country'];

    public function shiporders()
    {
        return $this->hasMany(Shiporder::class);
    }

    private $id;
//    private $name;
//    private $address;
//    private $city;
//    private $country;
//    private $shiporder;
//
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
//
//    /**
//     * @param mixed $id
//     */
//    public function setId($id): void
//    {
//        $this->id = $id;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    public function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAddress()
//    {
//        return $this->address;
//    }
//
//    /**
//     * @param mixed $address
//     */
//    public function setAddress($address): void
//    {
//        $this->address = $address;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCity()
//    {
//        return $this->city;
//    }
//
//    /**
//     * @param mixed $city
//     */
//    public function setCity($city): void
//    {
//        $this->city = $city;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCountry()
//    {
//        return $this->country;
//    }
//
//    /**
//     * @param mixed $country
//     */
//    public function setCountry($country): void
//    {
//        $this->country = $country;
//    }
}
