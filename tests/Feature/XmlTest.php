<?php


namespace Tests\Feature;


use Tests\TestCase;

class XmlTest extends TestCase
{
    public function testGetPessoas()
    {
        $response = $this->get('/api/pessoas');

        $response->assertStatus(200);
    }

    public function testGetItems()
    {
        $response = $this->get('/api/items');

        $response->assertStatus(200);
    }

    public function testGetShiptos()
    {
        $response = $this->get('/api/shiptos');

        $response->assertStatus(200);
    }

    public function testGetPhones()
    {
        $response = $this->get('/api/phones');

        $response->assertStatus(200);
    }


    public function testGetShiporders()
    {
        $response = $this->get('/api/shiporders');

        $response->assertStatus(200);
    }
}
