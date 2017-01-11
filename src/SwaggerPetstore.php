<?php
/**
 * This is a sample server Petstore server.  You can find out more about Swagger at <a href="http://swagger.io">http://swagger.io</a> or on irc.freenode.net, #swagger.  For this sample, you can use the api key "special-key" to test the authorization filters
 */
class SwaggerPetstore
{
    /**
     * @var RestApiCore\Client
     */
    private $client;

    /**
     * @param RestApiCore\Client $client
     */
    public function __construct(RestApiCore\Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $body Pet object in the form of byte array
     */
    public function addPetUsingByteArray($body)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet', 'Post', [], [], $body);
    }

    /**
     * @param Pet $body Pet object that needs to be added to the store
     */
    public function addPet(Pet $body)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet', 'Post', [], [], $body);
    }

    /**
     * @param Pet $body Pet object that needs to be added to the store
     */
    public function updatePet(Pet $body)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet', 'Put', [], [], $body);
    }

    /**
     * @param string[] $status Status values that need to be considered for filter
     * @return Pet[]
     */
    public function findPetsByStatus(array $status)
    {
        return $this->client->request(Pet::createClassInfo()->createArray(), '/pet/findByStatus', 'Get', ['status' => $status], [], '');
    }

    /**
     * @param string[] $tags Tags to filter by
     * @return Pet[]
     */
    public function findPetsByTags(array $tags)
    {
        return $this->client->request(Pet::createClassInfo()->createArray(), '/pet/findByTags', 'Get', ['tags' => $tags], [], '');
    }

    /**
     * @param int $petId ID of pet that needs to be fetched
     * @return string
     */
    public function findPetsWithByteArray($petId)
    {
        return $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet/' . $petId, 'Get', [], [], '');
    }

    /**
     * @param int $petId ID of pet that needs to be fetched
     * @return Pet
     */
    public function getPetById($petId)
    {
        return $this->client->request(Pet::createClassInfo(), '/pet/' . $petId, 'Get', [], [], '');
    }

    /**
     * @param string $petId ID of pet that needs to be updated
     * @param string $name Updated name of the pet
     * @param string $status Updated status of the pet
     */
    public function updatePetWithForm($petId, $name, $status)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet/' . $petId, 'Post', [], [], '');
    }

    /**
     * @param string $apiKey
     * @param int $petId Pet id to delete
     */
    public function deletePet($apiKey, $petId)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet/' . $petId, 'Delete', [], ['apiKey' => $apiKey], '');
    }

    /**
     * @param int $petId ID of pet to update
     * @param string $additionalMetadata Additional data to pass to server
     * @param string $file file to upload
     */
    public function uploadFile($petId, $additionalMetadata, $file)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet/' . $petId . '/uploadImage', 'Post', [], [], '');
    }

    /**
     * @return int[]
     */
    public function getInventory()
    {
        return $this->client->request(RestApiCore\PrimitiveTypeInfo::create()->createArray(), '/store/inventory', 'Get', [], [], '');
    }

    /**
     * @param Order $body order placed for purchasing the pet
     * @return Order
     */
    public function placeOrder(Order $body)
    {
        return $this->client->request(Order::createClassInfo(), '/store/order', 'Post', [], [], $body);
    }

    /**
     * @param string $orderId ID of pet that needs to be fetched
     * @return Order
     */
    public function getOrderById($orderId)
    {
        return $this->client->request(Order::createClassInfo(), '/store/order/' . $orderId, 'Get', [], [], '');
    }

    /**
     * @param string $orderId ID of the order that needs to be deleted
     */
    public function deleteOrder($orderId)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/store/order/' . $orderId, 'Delete', [], [], '');
    }

    /**
     * @param User $body Created user object
     */
    public function createUser(User $body)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user', 'Post', [], [], $body);
    }

    /**
     * @param User[] $body List of user object
     */
    public function createUsersWithArrayInput(array $body)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user/createWithArray', 'Post', [], [], $body);
    }

    /**
     * @param User[] $body List of user object
     */
    public function createUsersWithListInput(array $body)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user/createWithList', 'Post', [], [], $body);
    }

    /**
     * @param string $username The user name for login
     * @param string $password The password for login in clear text
     * @return string
     */
    public function loginUser($username, $password)
    {
        return $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user/login', 'Get', ['username' => $username, 'password' => $password], [], '');
    }

    /**
     */
    public function logoutUser()
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user/logout', 'Get', [], [], '');
    }

    /**
     * @param string $username The name that needs to be fetched. Use user1 for testing.
     * @return User
     */
    public function getUserByName($username)
    {
        return $this->client->request(User::createClassInfo(), '/user/' . $username, 'Get', [], [], '');
    }

    /**
     * @param string $username name that need to be deleted
     * @param User $body Updated user object
     */
    public function updateUser($username, User $body)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user/' . $username, 'Put', [], [], $body);
    }

    /**
     * @param string $username The name that needs to be deleted
     */
    public function deleteUser($username)
    {
        $this->client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user/' . $username, 'Delete', [], [], '');
    }
}
