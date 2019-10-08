<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = self::createClient();

        $client->request(
            'GET',
            '/accueil'
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("Bienvenue sur la page d'accueil.", $client->getResponse()->getContent());
    }
}