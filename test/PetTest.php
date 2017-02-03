<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use RestApiCore\ApiClient;
use SwaggerPetstore\SwaggerPetstore;
use SwaggerPetstore\Pet;
use SwaggerPetstore\Category;
use SwaggerPetstore\Tag;

class PetTest extends TestCase
{
    public static function createPetStore()
    {
        $httpClient = new Client();
        $client = new ApiClient($httpClient, 'http://petstore.swagger.io/v2');
        return new SwaggerPetstore($client);
    }

    public function testAddPet()
    {
        self::createPetStore()->addPet(Pet::create()
            ->id(0)
            ->name('doggie')
            ->category(
                Category::create()
                    ->id(0)
                    ->name('string')
            )
            ->photoUrls(['string'])
            ->tags([
                Tag::create()
                    ->id(0)
                    ->name('string')
            ])
            ->status('available')
        );
    }

    public function testUpdatePet()
    {
        self::createPetStore()->updatePet(Pet::create()
            ->id(0)
            ->category(Category::create(0, 'string'))
            ->name('doggie')
            ->photoUrls(['string'])
            ->tags([new Tag(0, 'string')])
            ->status('available')
        );
    }

    public function testFindPetsByStatus()
    {
        $pets = self::createPetStore()->findPetsByStatus(['available']);
        $this->assertTrue(count($pets) > 0);
    }

    /* deprecated
    public function testFindByTags()
    {
        $pets = self::createPetStore()->findPetsByTags(['tag2']);
        // $this->assertTrue(count($pets) > 0);
    }
    */

    public function testDelete()
    {
        $petStore = self::createPetStore();
        $petStore->addPet(Pet::create()->id(42));
        $petStore->deletePet('', 42);
    }

    public function testGetPetById()
    {
        $petStore = self::createPetStore();
        $petStore->addPet(Pet::create()->id('425'));
        $pet = $petStore->getPetById('425');
        $this->assertSame($pet->id, '425');
    }

    public function testUpdatePetWithForm()
    {
        $petStore = self::createPetStore();
        $petStore->updatePetWithForm('425', 'lion', 'sold');
    }

    public function testUploadImage()
    {
        $petStore = self::createPetStore();
        $petStore->uploadFile(425, 'aa', 'file');
    }
}
