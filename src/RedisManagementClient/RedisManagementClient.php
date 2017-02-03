<?php
namespace RedisManagementClient;

/**
 * REST API for Azure Redis Cache Service.
 */
class RedisManagementClient
{
    /**
     * @var \RestApiCore\ApiClient
     */
    private $apiClient;

    /**
     * @var Redis
     */
    public $redis;

    /**
     * @var PatchSchedules
     */
    public $patchSchedules;

    /**
     * @param \RestApiCore\ApiClient $apiClient
     */
    public function __construct(\RestApiCore\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        $this->redis = new Redis($apiClient);
        $this->patchSchedules = new PatchSchedules($apiClient);
    }
}
