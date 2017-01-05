<?php
/**
 * This is a sample server Petstore server.  You can find out more about Swagger at <a href="http://swagger.io">http://swagger.io</a> or on irc.freenode.net, #swagger.  For this sample, you can use the api key "special-key" to test the authorization filters
 */
class SwaggerPetstore
{
    /**
     * @var RestApiCore\Client
     */
    private $_client;

    /**
     * @param RestApiCore\Client $client
     */
    public function __constructor(RestApiCore\Client $client)
    {
        $this->_client = $client;
    }

    /**
     * @param string $body Pet object in the form of byte array
     */
    public function addPetUsingByteArray($body)
    {
        return $this->_client->request(null, '/pet', 'Post', [], [], [], $body);
    }

    /**
     * @param Pet $body Pet object that needs to be added to the store
     */
    public function addPet(Pet $body)
    {
        return $this->_client->request(null, '/pet', 'Post', [], [], [], $body);
    }

    /**
     * @param Pet $body Pet object that needs to be added to the store
     */
    public function updatePet(Pet $body)
    {
        return $this->_client->request(null, '/pet', 'Put', [], [], [], $body);
    }

    /**
     * @param string[] $status Status values that need to be considered for filter
     * @return Pet[]
     */
    public function findPetsByStatus(array $status)
    {
        return $this->_client->request(Pet::createClassInfo()->createArray(), '/pet/findByStatus', 'Get', [], ['status' => $status], [], '');
    }

    /**
     * @param string[] $tags Tags to filter by
     * @return Pet[]
     */
    public function findPetsByTags(array $tags)
    {
        return $this->_client->request(Pet::createClassInfo()->createArray(), '/pet/findByTags', 'Get', [], ['tags' => $tags], [], '');
    }

    /**
     * @param int $petId ID of pet that needs to be fetched
     * @return string
     */
    public function findPetsWithByteArray($petId)
    {
        return $this->_client->request(RestApiCore\PrimitiveTypeInfo::create(), '/pet/{petId}', 'Get', ['petId' => $petId], [], [], '');
    }

    /**
     * @param int $petId ID of pet that needs to be fetched
     * @return Pet
     */
    public function getPetById($petId)
    {
        return $this->_client->request(Pet::createClassInfo(), '/pet/{petId}', 'Get', ['petId' => $petId], [], [], '');
    }

    /**
     * @param string $petId ID of pet that needs to be updated
     * @param string $name Updated name of the pet
     * @param string $status Updated status of the pet
     */
    public function updatePetWithForm($petId, $name, $status)
    {
        return $this->_client->request(null, '/pet/{petId}', 'Post', ['petId' => $petId], [], [], '');
    }

    /**
     * @param string $apiKey
     * @param int $petId Pet id to delete
     */
    public function deletePet($apiKey, $petId)
    {
        return $this->_client->request(null, '/pet/{petId}', 'Delete', ['petId' => $petId], [], ['apiKey' => $apiKey], '');
    }

    /**
     * @param int $petId ID of pet to update
     * @param string $additionalMetadata Additional data to pass to server
     * @param string $file file to upload
     */
    public function uploadFile($petId, $additionalMetadata, $file)
    {
        return $this->_client->request(null, '/pet/{petId}/uploadImage', 'Post', ['petId' => $petId], [], [], '');
    }

    /**
     * @return int[]
     */
    public function getInventory()
    {
        return $this->_client->request(RestApiCore\PrimitiveTypeInfo::create()->createArray(), '/store/inventory', 'Get', [], [], [], '');
    }

    /**
     * @param Order $body order placed for purchasing the pet
     * @return Order
     */
    public function placeOrder(Order $body)
    {
        return $this->_client->request(Order::createClassInfo(), '/store/order', 'Post', [], [], [], $body);
    }

    /**
     * @param string $orderId ID of pet that needs to be fetched
     * @return Order
     */
    public function getOrderById($orderId)
    {
        return $this->_client->request(Order::createClassInfo(), '/store/order/{orderId}', 'Get', ['orderId' => $orderId], [], [], '');
    }

    /**
     * @param string $orderId ID of the order that needs to be deleted
     */
    public function deleteOrder($orderId)
    {
        return $this->_client->request(null, '/store/order/{orderId}', 'Delete', ['orderId' => $orderId], [], [], '');
    }

    /**
     * @param User $body Created user object
     */
    public function createUser(User $body)
    {
        return $this->_client->request(null, '/user', 'Post', [], [], [], $body);
    }

    /**
     * @param User[] $body List of user object
     */
    public function createUsersWithArrayInput(array $body)
    {
        return $this->_client->request(null, '/user/createWithArray', 'Post', [], [], [], $body);
    }

    /**
     * @param User[] $body List of user object
     */
    public function createUsersWithListInput(array $body)
    {
        return $this->_client->request(null, '/user/createWithList', 'Post', [], [], [], $body);
    }

    /**
     * @param string $username The user name for login
     * @param string $password The password for login in clear text
     * @return string
     */
    public function loginUser($username, $password)
    {
        return $this->_client->request(RestApiCore\PrimitiveTypeInfo::create(), '/user/login', 'Get', [], ['username' => $username, 'password' => $password], [], '');
    }

    /**
     */
    public function logoutUser()
    {
        return $this->_client->request(null, '/user/logout', 'Get', [], [], [], '');
    }

    /**
     * @param string $username The name that needs to be fetched. Use user1 for testing.
     * @return User
     */
    public function getUserByName($username)
    {
        return $this->_client->request(User::createClassInfo(), '/user/{username}', 'Get', ['username' => $username], [], [], '');
    }

    /**
     * @param string $username name that need to be deleted
     * @param User $body Updated user object
     */
    public function updateUser($username, User $body)
    {
        return $this->_client->request(null, '/user/{username}', 'Put', ['username' => $username], [], [], $body);
    }

    /**
     * @param string $username The name that needs to be deleted
     */
    public function deleteUser($username)
    {
        return $this->_client->request(null, '/user/{username}', 'Delete', ['username' => $username], [], [], '');
    }
}
