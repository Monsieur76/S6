<?php


namespace App\Tests\src\Controller;

use App\Entity\Detail;
use App\Repository\DetailRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    private $figure;
    public function setUp(): void
    {
        parent::setUp();
        $this->figure = new Detail();

    }

    public function testHome()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }



    public function testFigure()
    {
        $client = static::createClient();

        $client->request('GET', '/figure/45');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testRegister()
    {
        $client = static::createClient();

        $client->request('GET', '/register');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testConfirmRegister()
    {
        $client = static::createClient();

        $client->request('GET', '/confirmRegister');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

}