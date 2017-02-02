<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use RestApiCore\ApiClient;

final class E2ETest extends TestCase
{
    function test()
    {
        $httpClient = new Client();
        $client = new ApiClient($httpClient, 'http://petstore.swagger.io/v2');
        $petstore = new SwaggerPetstore($client);

        $petstore->addPet(new Pet(10, new Category(5, "dogs"), 'pet name', [], [], 'alive'));

        // $petstore->addPetUsingByteArray("[]");
        $petstore->createUser(new User(567));

        $petstore->createUsersWithArrayInput([new User()]);

        $petstore->createUsersWithListInput([new User()]);

        // 404
        // $petstore->deleteOrder("1");

        // 404
        // $petstore->deletePet("asd", 5);

        // 404
        // $petstore->deleteUser("user");

        $pets = $petstore->findPetsByStatus([ "sold" ]);
    }
}