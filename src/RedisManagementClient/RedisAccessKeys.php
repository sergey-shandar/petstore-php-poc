<?php
namespace RedisManagementClient;

/**
 */
class RedisAccessKeys
{
    /**
     * @var string|null
     */
    public $primaryKey;

    /**
     * @var string|null
     */
    public $secondaryKey;

    /**
     * @param string|null $primaryKey
     * @return self
     */
    public function primaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;
        return $this;
    }

    /**
     * @param string|null $secondaryKey
     * @return self
     */
    public function secondaryKey($secondaryKey)
    {
        $this->secondaryKey = $secondaryKey;
        return $this;
    }

    /**
     * @param string|null $primaryKey
     * @param string|null $secondaryKey
     */
    public function __construct($primaryKey = null, $secondaryKey = null)
    {
        $this->primaryKey = $primaryKey;
        $this->secondaryKey = $secondaryKey;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('primaryKey', 'primaryKey', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('secondaryKey', 'secondaryKey', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param string|null $primaryKey
     * @param string|null $secondaryKey
     * @return self
     */
    public static function create($primaryKey = null, $secondaryKey = null)
    {
        return new self($primaryKey, $secondaryKey);
    }
}
