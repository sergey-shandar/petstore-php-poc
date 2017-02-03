<?php
namespace RedisManagementClient;

/**
 */
class RedisResource
{
    /**
     * @var RedisResourceProperties|null
     */
    public $properties;

    /**
     * @param RedisResourceProperties|null $properties
     * @return self
     */
    public function properties(RedisResourceProperties $properties)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @param RedisResourceProperties|null $properties
     */
    public function __construct(RedisResourceProperties $properties = null)
    {
        $this->properties = $properties;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('properties', 'properties', RedisResourceProperties::createClassInfo())]);
    }

    /**
     * @param RedisResourceProperties|null $properties
     * @return self
     */
    public static function create(RedisResourceProperties $properties = null)
    {
        return new self($properties);
    }
}
