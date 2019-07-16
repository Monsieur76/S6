<?php


namespace App\Tests\src\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    public function testLogin()
    {
        $client = static::createClient();

        $client->request('GET', '/login');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testLogout()
    {
        $client = static::createClient();

        $client->request('GET', '/logout');

        throw new \LogicException('Bonne deco');

    }

    public function testForgot()
    {
        $client = static::createClient();

        $client->request('GET', '/password/forgot');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }


}