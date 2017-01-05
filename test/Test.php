<?php

use PHPUnit\Framework\TestCase;
use RestApiCore\Client;

class Test extends TestCase
{
    public function testPetStore()
    {
        $mock = new MockHttpClient();
        $client = new Client($mock);
        $petstore = new SwaggerPetstore(null);
    }
}
