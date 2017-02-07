<?php
namespace SwaggerPetstore;

/**
 * This is a sample server Petstore server.  You can find out more about Swagger at <a href="http://swagger.io">http://swagger.io</a> or on irc.freenode.net, #swagger.  For this sample, you can use the api key "special-key" to test the authorization filters
 */
class SwaggerPetstore
{
    /**
     * @var \RestApiCore\ApiClient
     */
    private $apiClient;

    /**
     * @param \RestApiCore\ApiClient $apiClient
     */
    public function __construct(\RestApiCore\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @param string|null $body Pet object in the form of byte array
     */
    public function addPetUsingByteArray($body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param Pet|null $body Pet object that needs to be added to the store
     */
    public function addPet(Pet $body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param Pet|null $body Pet object that needs to be added to the store
     */
    public function updatePet(Pet $body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet';
        $apiRequest->method = 'Put';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string[]|null $status Status values that need to be considered for filter
     * @return Pet[]
     */
    public function findPetsByStatus(array $status = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet/findByStatus';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = ['status' => $status];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(Pet::createClassInfo()->createArray(), $apiRequest);
    }

    /**
     * @param string[]|null $tags Tags to filter by
     * @return Pet[]
     */
    public function findPetsByTags(array $tags = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet/findByTags';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = ['tags' => $tags];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(Pet::createClassInfo()->createArray(), $apiRequest);
    }

    /**
     * @param string $petId ID of pet that needs to be fetched
     * @return string
     */
    public function findPetsWithByteArray($petId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet/' . $petId;
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $petId ID of pet that needs to be fetched
     * @return Pet
     */
    public function getPetById($petId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet/' . $petId;
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(Pet::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $petId ID of pet that needs to be updated
     * @param string|null $name Updated name of the pet
     * @param string|null $status Updated status of the pet
     */
    public function updatePetWithForm($petId, $name = null, $status = null)
    {
        $apiRequest = new \RestApiCore\Request\FormRequest();
        $apiRequest->path = '/pet/' . $petId;
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->formParams = ['name' => $name, 'status' => $status];
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string|null $apiKey
     * @param string $petId Pet id to delete
     */
    public function deletePet($apiKey = null, $petId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/pet/' . $petId;
        $apiRequest->method = 'Delete';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = ['apiKey' => $apiKey];
        $apiRequest->body = null;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $petId ID of pet to update
     * @param string|null $additionalMetadata Additional data to pass to server
     * @param string|null $file file to upload
     */
    public function uploadFile($petId, $additionalMetadata = null, $file = null)
    {
        $apiRequest = new \RestApiCore\Request\MultiPartRequest();
        $apiRequest->path = '/pet/' . $petId . '/uploadImage';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->formDataParameters = ['additionalMetadata' => $additionalMetadata, 'file' => $file];
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @return int[]
     */
    public function getInventory()
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/store/inventory';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create()->createArray(), $apiRequest);
    }

    /**
     * @param Order|null $body order placed for purchasing the pet
     * @return Order
     */
    public function placeOrder(Order $body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/store/order';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        return $this->apiClient->request(Order::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $orderId ID of pet that needs to be fetched
     * @return Order
     */
    public function getOrderById($orderId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/store/order/' . $orderId;
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(Order::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $orderId ID of the order that needs to be deleted
     */
    public function deleteOrder($orderId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/store/order/' . $orderId;
        $apiRequest->method = 'Delete';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param User|null $body Created user object
     */
    public function createUser(User $body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param User[]|null $body List of user object
     */
    public function createUsersWithArrayInput(array $body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user/createWithArray';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param User[]|null $body List of user object
     */
    public function createUsersWithListInput(array $body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user/createWithList';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string|null $username The user name for login
     * @param string|null $password The password for login in clear text
     * @return string
     */
    public function loginUser($username = null, $password = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user/login';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = ['username' => $username, 'password' => $password];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     */
    public function logoutUser()
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user/logout';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $username The name that needs to be fetched. Use user1 for testing.
     * @return User
     */
    public function getUserByName($username)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user/' . $username;
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(User::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $username name that need to be deleted
     * @param User|null $body Updated user object
     */
    public function updateUser($username, User $body = null)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user/' . $username;
        $apiRequest->method = 'Put';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $body;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $username The name that needs to be deleted
     */
    public function deleteUser($username)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/user/' . $username;
        $apiRequest->method = 'Delete';
        $apiRequest->queryParameters = [];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }
}
