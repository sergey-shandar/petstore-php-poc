<?php
namespace RedisManagementClient;

/**
 */
class Tests
{
    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisResource
     */
    public static function redis_Create(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $parameters = RedisCreateParameters::create()->properties(RedisCreateProperties::create()->sku(Sku::create()->name('Premium')->family('P')->capacity(1)));
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->redis->Create($resourceGroupName, $name, $parameters, $api_version, $subscriptionId);
        $testClient->assertSame(RedisResource::create()->properties(RedisResourceProperties::create()->sku(Sku::create()->name('Premium')->family('P')->capacity(1))->redisVersion('3.0')->provisioningState('Succeeded')->hostName('cache1.redis.cache.windows.net')->port(6379)->sslPort(6380)), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function redis_Delete(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $client->redis->Delete($resourceGroupName, $name, $api_version, $subscriptionId);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function redis_ExportData(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $parameters = ExportRDBParameters::create()->format('RDB')->prefix('datadump1')->container('https://contosostorage.blob.core.window.net/urltoBlobContainer?sasKeyParameters');
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $client->redis->ExportData($resourceGroupName, $name, $parameters, $api_version, $subscriptionId);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function redis_ForceReboot(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $parameters = RedisRebootParameters::create()->rebootType('AllNodes')->shardId(0);
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $client->redis->ForceReboot($resourceGroupName, $name, $parameters, $api_version, $subscriptionId);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisResource
     */
    public static function redis_Get(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->redis->Get($resourceGroupName, $name, $api_version, $subscriptionId);
        $testClient->assertSame(RedisResource::create()->properties(RedisResourceProperties::create()->sku(Sku::create()->name('Standard')->family('C')->capacity(6))->redisVersion('3.2')->provisioningState('Creating')->hostName('cache1.redis.cache.windows.net')->port(6379)->sslPort(6380)), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function redis_ImportData(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $parameters = ImportRDBParameters::create()->format('RDB')->files(['http://fileuris.contoso.com/pathtofile1']);
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $client->redis->ImportData($resourceGroupName, $name, $parameters, $api_version, $subscriptionId);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisListResult
     */
    public static function redis_List(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->redis->List($api_version, $subscriptionId);
        $testClient->assertSame(RedisListResult::create()->value([RedisResource::create()->properties(RedisResourceProperties::create()->sku(Sku::create()->name('Standard')->family('C')->capacity(6))->redisVersion('3.2')->provisioningState('Creating')->hostName('cache1.redis.cache.windows.net')->port(6379)->sslPort(6380))]), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisListResult
     */
    public static function redis_ListByResourceGroup(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->redis->ListByResourceGroup($resourceGroupName, $api_version, $subscriptionId);
        $testClient->assertSame(RedisListResult::create()->value([RedisResource::create()->properties(RedisResourceProperties::create()->sku(Sku::create()->name('Standard')->family('C')->capacity(6))->redisVersion('3.2')->provisioningState('Creating')->hostName('cache1.redis.cache.windows.net')->port(6379)->sslPort(6380))]), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisAccessKeys
     */
    public static function redis_ListKeys(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->redis->ListKeys($resourceGroupName, $name, $api_version, $subscriptionId);
        $testClient->assertSame(RedisAccessKeys::create()->primaryKey('secretkey1')->secondaryKey('secretKey2'), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisPatchSchedule
     */
    public static function patchSchedules_CreateOrUpdate(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $parameters = RedisPatchSchedule::create()->properties(ScheduleEntries::create()->scheduleEntries([ScheduleEntry::create()->dayOfWeek('Monday')->startHourUtc(12), ScheduleEntry::create()->dayOfWeek('Tuesday')->startHourUtc(12)]));
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->patchSchedules->CreateOrUpdate($resourceGroupName, $name, $parameters, $api_version, $subscriptionId);
        $testClient->assertSame(RedisPatchSchedule::create()->id('/subscriptions/subid/resourceGroups/rg1/providers/Microsoft.Cache/Redis/cache1/patchSchedules/default')->name('default')->type('Microsoft.Cache/Redis/patchSchedules')->location('West US')->properties(ScheduleEntries::create()->scheduleEntries([ScheduleEntry::create()->dayOfWeek('Monday')->startHourUtc(12), ScheduleEntry::create()->dayOfWeek('Tuesday')->startHourUtc(12)])), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     */
    public static function patchSchedules_Delete(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $client->patchSchedules->Delete($resourceGroupName, $name, $api_version, $subscriptionId);
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisPatchSchedule
     */
    public static function patchSchedules_Get(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->patchSchedules->Get($resourceGroupName, $name, $api_version, $subscriptionId);
        $testClient->assertSame(RedisPatchSchedule::create()->id('/subscriptions/subid/resourceGroups/rg1/providers/Microsoft.Cache/Redis/cache1/patchSchedules/default')->name('default')->type('Microsoft.Cache/Redis/patchSchedules')->location('West US')->properties(ScheduleEntries::create()->scheduleEntries([ScheduleEntry::create()->dayOfWeek('Monday')->startHourUtc(12), ScheduleEntry::create()->dayOfWeek('Tuesday')->startHourUtc(12)])), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisAccessKeys
     */
    public static function redis_RegenerateKey(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $parameters = RedisRegenerateKeyParameters::create()->keyType('Primary');
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->redis->RegenerateKey($resourceGroupName, $name, $parameters, $api_version, $subscriptionId);
        $testClient->assertSame(RedisAccessKeys::create()->primaryKey('secretkey1')->secondaryKey('secretKey2'), $result);
        return $result;
    }

    /**
     * @param \RestApiCore\TestClient $testClient
     * @return RedisResource
     */
    public static function redis_Update(\RestApiCore\TestClient $testClient)
    {
        $client = new RedisManagementClient($testClient->apiClient);
        $resourceGroupName = 'rg1';
        $name = 'cache1';
        $parameters = RedisUpdateParameters::create()->properties(RedisUpdateProperties::create());
        $api_version = '2016-04-01';
        $subscriptionId = 'subid';
        $result = $client->redis->Update($resourceGroupName, $name, $parameters, $api_version, $subscriptionId);
        $testClient->assertSame(RedisResource::create()->properties(RedisResourceProperties::create()->sku(Sku::create()->name('Premium')->family('P')->capacity(1))->redisVersion('3.0')->provisioningState('Succeeded')->hostName('cache1.redis.cache.windows.net')->port(6379)->sslPort(6380)), $result);
        return $result;
    }
}
