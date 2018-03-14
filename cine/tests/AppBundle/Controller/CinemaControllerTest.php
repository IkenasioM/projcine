<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Controller\CinemaController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CinemaControllerTest extends WebTestCase
{

    public function testPostCinemasAction()
    {

    }

    public function testGetCinemasAction()
    {
        $client = static::createClient();

        $client->request('GET', 'http://cine.ws/cinemas');
        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->headers->contains('Content-type', 'application/json'));
        $this->assertJson($response->getContent());

        $cinemas = json_decode($response->getContent());
        $this->assertGreaterThan(1, count($cinemas));
    }

    public function testGetCinemaAction()
    {
        $client = static::createClient();

        $client->request('GET', 'http://cine.ws/cinemas/3');
        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->headers->contains('Content-type', 'application/json'));
        $this->assertJson($response->getContent());

        $cinema = json_decode($response->getContent(), true);
        $this->assertArrayHasKey('id',$cinema);
        $this->assertArrayHasKey('nom',$cinema);
        $this->assertArrayHasKey('adresse',$cinema);
        $this->assertArrayHasKey('salles',$cinema);
        $this->assertEquals($cinema['nom'], "CGR Olympia");
    }

    public function testPostCinemaAction()
    {
        $client = static::createClient();

        $client->request('POST', 'http://cine.ws/cinemas', array('nom' => "nom",
            'adresse' => "test",
            'accessibilite' => true)
            );
        $response = $client->getResponse();
        $this->assertEquals(201, $response->getStatusCode());
        $this->assertJson($response->getContent());

        $cinema = json_decode($response->getContent(), true);
        $this->assertArrayHasKey('id', $cinema);

        $client->request('GET', 'http://cine.ws/cinemas');
        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getContent());

        $this->assertContains('nom', $response->getContent());
    }

    public function testRemoveCinemaAction()
    {

    }

    public function testUpdateCinemaAction()
    {

    }
}
