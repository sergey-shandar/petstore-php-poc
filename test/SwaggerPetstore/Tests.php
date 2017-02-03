<?php
namespace SwaggerPetstore;

/**
 */
class Tests
{
    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function addPet(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $body = Pet::create()->id('421')->category(Category::create()->id('0')->name('string'))->name('doggie')->photoUrls(['string'])->tags([Tag::create()->id('0')->name('string')])->status('available');
        $client->AddPet($body);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function createUser(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $body = User::create()->id('0')->username('belkin')->firstName('string')->lastName('string')->email('string')->password('password')->phone('phone')->userStatus(0);
        $client->CreateUser($body);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function createUsersWithArrayInput(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $body = [User::create()->id('0')];
        $client->CreateUsersWithArrayInput($body);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function createUsersWithListInput(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $body = [User::create()->id('1')];
        $client->CreateUsersWithListInput($body);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function deleteOrder(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $orderId = '42';
        $client->DeleteOrder($orderId);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function deletePet(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $api_key = null;
        $petId = '421';
        $client->DeletePet($api_key, $petId);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function deleteUser(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $username = 'belkin';
        $client->DeleteUser($username);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return Pet[]
     */
    public static function findPetsByStatus(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $status = ['sold'];
        $result = $client->FindPetsByStatus($status);
        $testClient->assertSame([], $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return Pet[]
     */
    public static function findPetsByTags(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $tags = ['tag2'];
        $result = $client->FindPetsByTags($tags);
        $testClient->assertSame([], $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return int[]
     */
    public static function getInventory(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $result = $client->GetInventory();
        $testClient->assertSame([], $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return Order
     */
    public static function getOrderById(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $orderId = '42';
        $result = $client->GetOrderById($orderId);
        $testClient->assertSame(Order::create()->id('42')->petId('0')->quantity(0)->shipDate(new \DateTime('2017-01-18T18:35:20.000Z'))->status('placed')->complete(FALSE), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return Pet
     */
    public static function getPetById(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $petId = '421';
        $result = $client->GetPetById($petId);
        $testClient->assertSame(Pet::create()->id('421')->category(Category::create()->id('0')->name('string'))->name('doggie')->photoUrls(['string'])->tags([Tag::create()->id('0')->name('string')])->status('available'), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return User
     */
    public static function getUserByName(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $username = 'belkin';
        $result = $client->GetUserByName($username);
        $testClient->assertSame(User::create()->id('0')->username('belkin')->firstName('string')->lastName('string')->email('string')->password('password')->phone('phone')->userStatus(0), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return string
     */
    public static function loginUser(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $username = 'someuser';
        $password = 'strongpassword';
        $result = $client->LoginUser($username, $password);
        $testClient->assertSame(null, $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function logoutUser(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $client->LogoutUser();
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return Order
     */
    public static function placeOrder(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $body = Order::create()->id('42')->petId('0')->quantity(0)->shipDate(new \DateTime('2017-01-18T18:23:32.708Z'))->status('placed')->complete(FALSE);
        $result = $client->PlaceOrder($body);
        $testClient->assertSame(Order::create()->id('42')->petId('0')->quantity(0)->shipDate(new \DateTime('2017-01-18T18:35:20.000Z'))->status('placed')->complete(FALSE), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function updatePet(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $body = Pet::create()->id('0')->category(Category::create()->id('0')->name('string'))->name('doggie')->photoUrls(['string'])->tags([Tag::create()->id('0')->name('string')])->status('available');
        $client->UpdatePet($body);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function updatePetWithForm(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $petId = '425';
        $name = 'lion';
        $status = 'sold';
        $client->UpdatePetWithForm($petId, $name, $status);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function updateUser(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $username = 'belkin';
        $body = User::create();
        $client->UpdateUser($username, $body);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function uploadFile(\RestApiCore\TestClient $testClient)
    {
        $client = new SwaggerPetstore($testClient->apiClient);
        $petId = '42';
        $additionalMetadata = 'aaa';
        $file = 'file';
        $client->UploadFile($petId, $additionalMetadata, $file);
    }
}
