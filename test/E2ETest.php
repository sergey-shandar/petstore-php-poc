<?php

use PHPUnit\Framework\TestCase;
use RestApiCore\Client;

class E2ETest extends TestCase
{
    function test()
    {
        $httpClient = new GuzzleHttp\Client();
        $client = new Client($httpClient, 'http://petstore.swagger.io/v2');
        $petstore = new SwaggerPetstore($client);

        $petstore->addPet(new Pet(10, new Category(5, "dogs"), 'pet name', [], [], 'alive'));

        // $petstore->addPetUsingByteArray("[]");
        $petstore->createUser(new User(567));

        $petstore->createUsersWithArrayInput([new User()]);

        $petstore->createUsersWithListInput([new User()]);

        $petstore->deleteOrder("an order");
    }
}