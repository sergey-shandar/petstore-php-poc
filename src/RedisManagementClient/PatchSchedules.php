<?php
namespace RedisManagementClient;

/**
 */
class PatchSchedules
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
     * @param RedisPatchSchedule $parameters Parameters to set the patching schedule for Redis cache.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisPatchSchedule
     */
    public function createOrUpdate($resourceGroupName, $name, RedisPatchSchedule $parameters, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/patchSchedules/default';
        $apiRequest->method = 'Put';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = $parameters;
        return $this->apiClient->request(RedisPatchSchedule::createClassInfo(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the redis cache.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     */
    public function delete($resourceGroupName, $name, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/patchSchedules/default';
        $apiRequest->method = 'Delete';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        $this->apiClient->request(\RestApiCore\Type\PrimitiveType::create(), $apiRequest);
    }

    /**
     * @param string $resourceGroupName The name of the resource group.
     * @param string $name The name of the redis cache.
     * @param string $apiVersion Client Api Version.
     * @param string $subscriptionId Gets subscription credentials which uniquely identify the Microsoft Azure subscription. The subscription ID forms part of the URI for every service call.
     * @return RedisPatchSchedule
     */
    public function get($resourceGroupName, $name, $apiVersion, $subscriptionId)
    {
        $apiRequest = new \RestApiCore\Request\JsonRequest();
        $apiRequest->path = '/subscriptions/' . $subscriptionId . '/resourceGroups/' . $resourceGroupName . '/providers/Microsoft.Cache/Redis/' . $name . '/patchSchedules/default';
        $apiRequest->method = 'Get';
        $apiRequest->queryParameters = ['apiVersion' => $apiVersion];
        $apiRequest->headerParameters = [];
        $apiRequest->body = null;
        return $this->apiClient->request(RedisPatchSchedule::createClassInfo(), $apiRequest);
    }
}
