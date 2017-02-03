<?php
namespace RedisManagementClient;

/**
 */
class RedisProperties
{
    /**
     * @var string[]|null
     */
    public $redisConfiguration;

    /**
     * @var bool|null
     */
    public $enableNonSslPort;

    /**
     * @var string[]|null
     */
    public $tenantSettings;

    /**
     * @var int|null
     */
    public $shardCount;

    /**
     * @var string|null
     */
    public $subnetId;

    /**
     * @var string|null
     */
    public $staticIp;

    /**
     * @param string[]|null $redisConfiguration
     * @return self
     */
    public function redisConfiguration(array $redisConfiguration)
    {
        $this->redisConfiguration = $redisConfiguration;
        return $this;
    }

    /**
     * @param bool|null $enableNonSslPort
     * @return self
     */
    public function enableNonSslPort($enableNonSslPort)
    {
        $this->enableNonSslPort = $enableNonSslPort;
        return $this;
    }

    /**
     * @param string[]|null $tenantSettings
     * @return self
     */
    public function tenantSettings(array $tenantSettings)
    {
        $this->tenantSettings = $tenantSettings;
        return $this;
    }

    /**
     * @param int|null $shardCount
     * @return self
     */
    public function shardCount($shardCount)
    {
        $this->shardCount = $shardCount;
        return $this;
    }

    /**
     * @param string|null $subnetId
     * @return self
     */
    public function subnetId($subnetId)
    {
        $this->subnetId = $subnetId;
        return $this;
    }

    /**
     * @param string|null $staticIp
     * @return self
     */
    public function staticIp($staticIp)
    {
        $this->staticIp = $staticIp;
        return $this;
    }

    /**
     * @param string[]|null $redisConfiguration
     * @param bool|null $enableNonSslPort
     * @param string[]|null $tenantSettings
     * @param int|null $shardCount
     * @param string|null $subnetId
     * @param string|null $staticIp
     */
    public function __construct(array $redisConfiguration = null, $enableNonSslPort = null, array $tenantSettings = null, $shardCount = null, $subnetId = null, $staticIp = null)
    {
        $this->redisConfiguration = $redisConfiguration;
        $this->enableNonSslPort = $enableNonSslPort;
        $this->tenantSettings = $tenantSettings;
        $this->shardCount = $shardCount;
        $this->subnetId = $subnetId;
        $this->staticIp = $staticIp;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('redisConfiguration', 'redisConfiguration', \RestApiCore\Type\PrimitiveType::create()->createArray()), new \RestApiCore\PropertyInfo('enableNonSslPort', 'enableNonSslPort', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('tenantSettings', 'tenantSettings', \RestApiCore\Type\PrimitiveType::create()->createArray()), new \RestApiCore\PropertyInfo('shardCount', 'shardCount', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('subnetId', 'subnetId', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('staticIp', 'staticIP', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param string[]|null $redisConfiguration
     * @param bool|null $enableNonSslPort
     * @param string[]|null $tenantSettings
     * @param int|null $shardCount
     * @param string|null $subnetId
     * @param string|null $staticIp
     * @return self
     */
    public static function create(array $redisConfiguration = null, $enableNonSslPort = null, array $tenantSettings = null, $shardCount = null, $subnetId = null, $staticIp = null)
    {
        return new self($redisConfiguration, $enableNonSslPort, $tenantSettings, $shardCount, $subnetId, $staticIp);
    }
}
