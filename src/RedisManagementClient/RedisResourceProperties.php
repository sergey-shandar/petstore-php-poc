<?php
namespace RedisManagementClient;

/**
 */
class RedisResourceProperties
{
    /**
     * @var Sku|null
     */
    public $sku;

    /**
     * @var string|null
     */
    public $redisVersion;

    /**
     * @var string|null
     */
    public $provisioningState;

    /**
     * @var string|null
     */
    public $hostName;

    /**
     * @var int|null
     */
    public $port;

    /**
     * @var int|null
     */
    public $sslPort;

    /**
     * @param Sku|null $sku
     * @return self
     */
    public function sku(Sku $sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @param string|null $redisVersion
     * @return self
     */
    public function redisVersion($redisVersion)
    {
        $this->redisVersion = $redisVersion;
        return $this;
    }

    /**
     * @param string|null $provisioningState
     * @return self
     */
    public function provisioningState($provisioningState)
    {
        $this->provisioningState = $provisioningState;
        return $this;
    }

    /**
     * @param string|null $hostName
     * @return self
     */
    public function hostName($hostName)
    {
        $this->hostName = $hostName;
        return $this;
    }

    /**
     * @param int|null $port
     * @return self
     */
    public function port($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @param int|null $sslPort
     * @return self
     */
    public function sslPort($sslPort)
    {
        $this->sslPort = $sslPort;
        return $this;
    }

    /**
     * @param Sku|null $sku
     * @param string|null $redisVersion
     * @param string|null $provisioningState
     * @param string|null $hostName
     * @param int|null $port
     * @param int|null $sslPort
     */
    public function __construct(Sku $sku = null, $redisVersion = null, $provisioningState = null, $hostName = null, $port = null, $sslPort = null)
    {
        $this->sku = $sku;
        $this->redisVersion = $redisVersion;
        $this->provisioningState = $provisioningState;
        $this->hostName = $hostName;
        $this->port = $port;
        $this->sslPort = $sslPort;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('sku', 'sku', Sku::createClassInfo()), new \RestApiCore\PropertyInfo('redisVersion', 'redisVersion', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('provisioningState', 'provisioningState', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('hostName', 'hostName', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('port', 'port', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('sslPort', 'sslPort', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param Sku|null $sku
     * @param string|null $redisVersion
     * @param string|null $provisioningState
     * @param string|null $hostName
     * @param int|null $port
     * @param int|null $sslPort
     * @return self
     */
    public static function create(Sku $sku = null, $redisVersion = null, $provisioningState = null, $hostName = null, $port = null, $sslPort = null)
    {
        return new self($sku, $redisVersion, $provisioningState, $hostName, $port, $sslPort);
    }
}
