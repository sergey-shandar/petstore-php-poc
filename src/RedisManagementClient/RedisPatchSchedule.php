<?php
namespace RedisManagementClient;

/**
 */
class RedisPatchSchedule
{
    /**
     * @var string|null
     */
    public $id;

    /**
     * @var string|null
     */
    public $name;

    /**
     * @var string|null
     */
    public $type;

    /**
     * @var string|null
     */
    public $location;

    /**
     * @var ScheduleEntries
     */
    public $properties;

    /**
     * @param string|null $id
     * @return self
     */
    public function id($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $name
     * @return self
     */
    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $type
     * @return self
     */
    public function type($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string|null $location
     * @return self
     */
    public function location($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @param ScheduleEntries $properties
     * @return self
     */
    public function properties(ScheduleEntries $properties)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @param string|null $id
     * @param string|null $name
     * @param string|null $type
     * @param string|null $location
     * @param ScheduleEntries|null $properties
     */
    public function __construct($id = null, $name = null, $type = null, $location = null, ScheduleEntries $properties = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->location = $location;
        $this->properties = $properties;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('id', 'id', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('name', 'name', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('type', 'type', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('location', 'location', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('properties', 'properties', ScheduleEntries::createClassInfo())]);
    }

    /**
     * @param string|null $id
     * @param string|null $name
     * @param string|null $type
     * @param string|null $location
     * @param ScheduleEntries|null $properties
     * @return self
     */
    public static function create($id = null, $name = null, $type = null, $location = null, ScheduleEntries $properties = null)
    {
        return new self($id, $name, $type, $location, $properties);
    }
}
