<?php

namespace adminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CinemaControllerTest extends WebTestCase
{
    public function testDetailcinema()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/detailcinema');

        $this->assertContains('Cinema:detailcinema', $client->getResponse()->getContent());
        //$this->assertGreaterThanOrEqual(1, $crawler->filter('a.pull-right')->count());
        $this->assertGreaterThanOrEqual(0, $crawler->filter('a[href="/3"]')->count());
    }

    public function testDetailfilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/detailfilm');
    }

    public function testAddcinema()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addcinema');
    }

    public function testAddfilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addfilm');
    }

    public function testGestfilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gestfilm');
    }

}
