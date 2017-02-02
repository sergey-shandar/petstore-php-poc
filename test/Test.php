<?php

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use RestApiCore\ApiClient;

class Test extends TestCase
{
    public function testPetStore()
    {
        $mock = new MockHttpClient(new Response());
        $client = new ApiClient($mock, 'http://petstore.swagger.io/v2');
        $petstore = new SwaggerPetstore($client);
        $petstore->addPet(new Pet());
    }
}
