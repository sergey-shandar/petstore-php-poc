<?php
namespace RedisManagementClient;

/**
 */
class Redis
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
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param RedisCreateParameters $parameters Parameters supplied to the Create Redis operation.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisResource
     */
    public function create($resourceGroupName, $name, RedisCreateParameters $parameters, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name;
        $apiRequest->method = 'Put';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $parameters;
        return $this->apiClient->request(RedisResource::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param RedisUpdateParameters $parameters Parameters supplied to the Update Redis operation.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisResource
     */
    public function update($resourceGroupName, $name, RedisUpdateParameters $parameters, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name;
        $apiRequest->method = 'Patch';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $parameters;
        return $this->apiClient->request(RedisResource::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     */
    public function delete($resourceGroupName, $name, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name;
        $apiRequest->method = 'Delete';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisResource
     */
    public function get($resourceGroupName, $name, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name;
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(RedisResource::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisListResult
     */
    public function listByResourceGroup($resourceGroupName, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(RedisListResult::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisListResult
     */
    public function list($apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/providers/Microsoft.Cache/Redis/';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(RedisListResult::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisAccessKeys
     */
    public function listKeys($resourceGroupName, $name, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/listKeys';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(RedisAccessKeys::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param RedisRegenerateKeyParameters $parameters Specifies which key to regenerate.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisAccessKeys
     */
    public function regenerateKey($resourceGroupName, $name, RedisRegenerateKeyParameters $parameters, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/regenerateKey';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $parameters;
        return $this->apiClient->request(RedisAccessKeys::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param RedisRebootParameters $parameters Specifies which Redis node(s) to reboot.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     */
    public function forceReboot($resourceGroupName, $name, RedisRebootParameters $parameters, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/forceReboot';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $parameters;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param ImportRDBParameters $parameters Parameters for Redis import operation.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     */
    public function importData($resourceGroupName, $name, ImportRDBParameters $parameters, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/import';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $parameters;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the Redis cache.
     * @param ExportRDBParameters $parameters Parameters for Redis export operation.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     */
    public function exportData($resourceGroupName, $name, ExportRDBParameters $parameters, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/export';
        $apiRequest->method = 'Post';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $parameters;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }
}
