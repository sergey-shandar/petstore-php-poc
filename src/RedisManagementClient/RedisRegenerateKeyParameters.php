<?php
namespace RedisManagementClient;

/**
 */
class RedisRegenerateKeyParameters
{
    /**
     * @var string
     */
    public $keyType;

    /**
     * @param string $keyType
     * @return self
     */
    public function keyType($keyType)
    {
        $this->keyType = $keyType;
        return $this;
    }

    /**
     * @param string|null $keyType
     */
    public function __construct($keyType = null)
    {
        $this->keyType = $keyType;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('keyType', 'keyType', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param string|null $keyType
     * @return self
     */
    public static function create($keyType = null)
    {
        return new self($keyType);
    }
}
