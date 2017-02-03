<?php
namespace RedisManagementClient;

/**
 */
class RedisCreateParameters
{
    /**
     * @var RedisCreateProperties
     */
    public $properties;

    /**
     * @param RedisCreateProperties $properties
     * @return self
     */
    public function properties(RedisCreateProperties $properties)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @param RedisCreateProperties|null $properties
     */
    public function __construct(RedisCreateProperties $properties = null)
    {
        $this->properties = $properties;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('properties', 'properties', RedisCreateProperties::createClassInfo())]);
    }

    /**
     * @param RedisCreateProperties|null $properties
     * @return self
     */
    public static function create(RedisCreateProperties $properties = null)
    {
        return new self($properties);
    }
}
