<?php

use PHPUnit\Framework\TestCase;

final class GenSequenceTest extends TestCase
{
    public function testRunTestGen()
    {
        $testClient = new UnitTestClient();

        $petStore = new SwaggerPetstore($testClient->apiClient);
        $pets = $petStore->findPetsByStatus(['sold']);
        foreach ($pets as $pet) {
            $petStore->deletePet(null, $pet->id);
        }

        Tests::addPet($testClient);
        Tests::createUser($testClient);
        Tests::createUsersWithArrayInput($testClient);
        Tests::createUsersWithListInput($testClient);

        Tests::loginUser($testClient);
        Tests::logoutUser($testClient);

        Tests::placeOrder($testClient);

        Tests::updatePet($testClient);
        Tests::updatePetWithForm($testClient);
        Tests::updateUser($testClient);
        Tests::uploadFile($testClient);

        Tests::findPetsByStatus($testClient);
        Tests::findPetsByTags($testClient);
        // Tests::getInventory($testClient);
        Tests::getOrderById($testClient);
        Tests::getPetById($testClient);
        Tests::getUserByName($testClient);

        Tests::deleteOrder($testClient);
        Tests::deletePet($testClient);
        Tests::deleteUser($testClient);
    }
}