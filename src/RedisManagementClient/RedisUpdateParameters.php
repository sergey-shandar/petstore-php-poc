<?php
namespace RedisManagementClient;

/**
 */
class RedisUpdateParameters
{
    /**
     * @var RedisUpdateProperties|null
     */
    public $properties;

    /**
     * @param RedisUpdateProperties|null $properties
     * @return self
     */
    public function properties(RedisUpdateProperties $properties)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @param RedisUpdateProperties|null $properties
     */
    public function __construct(RedisUpdateProperties $properties = null)
    {
        $this->properties = $properties;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('properties', 'properties', RedisUpdateProperties::createClassInfo())]);
    }

    /**
     * @param RedisUpdateProperties|null $properties
     * @return self
     */
    public static function create(RedisUpdateProperties $properties = null)
    {
        return new self($properties);
    }
}
