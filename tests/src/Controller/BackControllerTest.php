<?php


namespace App\Tests\src\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BackControllerTest extends WebTestCase
{
    public function testUpdateError404()
    {
        $client = static::createClient();
        $client->request('get', '/update/4');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testUpdate302()
    {
        $client = static::createClient();
        $client->request('get', '/update/37');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testUpdateVidError404()
    {
        $client = static::createClient();
        $client->request('get', '/updatevid/4');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testUpdateVid302()
    {
        $client = static::createClient();
        $client->request('get', '/updatevid/25');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testUpdate_imgError404()
    {
        $client = static::createClient();
        $client->request('get', '/updateImg/4');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testUpdate_img302()
    {
        $client = static::createClient();
        $client->request('get', '/updateImg/45');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testCreat()
    {
        $client = static::createClient();
        $client->request('get', '/creat');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testDeleteError404()
    {
        $client = static::createClient();
        $client->request('get', '/delete/10');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testDelete()
    {
        $client = static::createClient();
        $client->request('get', '/delete/45');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testProfil()
    {
        $client = static::createClient();
        $client->request('get', '/profil');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testDeleteImgError404()
    {
        $client = static::createClient();
        $client->request('get', '/deleteImg/10');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testDeleteImg()
    {
        $client = static::createClient();
        $client->request('get', '/deleteImg/45');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testDeleteVidError404()
    {
        $client = static::createClient();
        $client->request('get', '/deleteVid/1');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testDeleteVid()
    {
        $client = static::createClient();
        $client->request('get', '/deleteVid/25');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testDeleteImgDetailError404()
    {
        $client = static::createClient();
        $client->request('get', '/deleteImgDetail/10');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testDeleteImgDetail()
    {
        $client = static::createClient();
        $client->request('get', '/deleteImgDetail/45');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testDeletAdminError404()
    {
        $client = static::createClient();
        $client->request('get', '/deletAdmin/10');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testDeletAdmin()
    {
        $client = static::createClient();
        $client->request('get', '/deletAdmin/17');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }
}