<?php
namespace RedisManagementClient;

/**
 */
class RedisCreateProperties
{
    /**
     * @var Sku
     */
    public $sku;

    /**
     * @param Sku $sku
     * @return self
     */
    public function sku(Sku $sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @param Sku|null $sku
     */
    public function __construct(Sku $sku = null)
    {
        $this->sku = $sku;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('sku', 'sku', Sku::createClassInfo())]);
    }

    /**
     * @param Sku|null $sku
     * @return self
     */
    public static function create(Sku $sku = null)
    {
        return new self($sku);
    }
}
