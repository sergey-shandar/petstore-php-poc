<?php

use PHPUnit\Framework\TestCase;
use SwaggerPetstore\User;

final class UserTest extends TestCase
{
    public function testCreateUser()
    {
        $store = PetTest::createPetStore();
        $store->createUser(User::create()
            ->id(0)
            ->username('string')
            ->firstName('string')
            ->lastName('string')
            ->email('string')
            ->password('string')
            ->phone('string')
            ->userStatus(0)
        );
    }

    public function testCreateUsersWithArrayInput()
    {
        $store = PetTest::createPetStore();
        $store->createUsersWithArrayInput([ User::create()->id(1) ]);
    }

    public function testCreateUsersWithListInput()
    {
        $store = PetTest::createPetStore();
        $store->createUsersWithListInput([ User::create()->id(1) ]);
    }

    public function testLoginUser()
    {
        $store = PetTest::createPetStore();
        $store->loginUser('something', '12345');
    }

    public function testLogoutUser()
    {
        $store = PetTest::createPetStore();
        $store->logoutUser();
    }

    public function testDeleteUser()
    {
        $store = PetTest::createPetStore();
        $store->createUser(User::create()->id(1)->username('belkin'));
        $store->deleteUser('belkin');
    }

    public function testGetUserByName()
    {
        $store = PetTest::createPetStore();
        $user = $store->getUserByName('string');
    }

    public function testUpdateUser()
    {
        $store = PetTest::createPetStore();
        $store->updateUser('string', User::create());
    }
}
