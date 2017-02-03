<?php
namespace RedisManagementClient;

/**
 */
class RedisUpdateProperties
{
    /**
     * @var Sku|null
     */
    public $sku;

    /**
     * @var string[]|null
     */
    public $tags;

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
     * @param string[]|null $tags
     * @return self
     */
    public function tags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param Sku|null $sku
     * @param string[]|null $tags
     */
    public function __construct(Sku $sku = null, array $tags = null)
    {
        $this->sku = $sku;
        $this->tags = $tags;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('sku', 'sku', Sku::createClassInfo()), new \RestApiCore\PropertyInfo('tags', 'tags', \RestApiCore\Type\PrimitiveType::create()->createArray())]);
    }

    /**
     * @param Sku|null $sku
     * @param string[]|null $tags
     * @return self
     */
    public static function create(Sku $sku = null, array $tags = null)
    {
        return new self($sku, $tags);
    }
}
