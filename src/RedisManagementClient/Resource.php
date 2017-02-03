<?php
namespace RedisManagementClient;

/**
 */
class Resource
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
     * @var string
     */
    public $location;

    /**
     * @var string[]|null
     */
    public $tags;

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
     * @param string $location
     * @return self
     */
    public function location($location)
    {
        $this->location = $location;
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
     * @param string|null $id
     * @param string|null $name
     * @param string|null $type
     * @param string|null $location
     * @param string[]|null $tags
     */
    public function __construct($id = null, $name = null, $type = null, $location = null, array $tags = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->location = $location;
        $this->tags = $tags;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('id', 'id', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('name', 'name', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('type', 'type', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('location', 'location', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('tags', 'tags', \RestApiCore\Type\PrimitiveType::create()->createArray())]);
    }

    /**
     * @param string|null $id
     * @param string|null $name
     * @param string|null $type
     * @param string|null $location
     * @param string[]|null $tags
     * @return self
     */
    public static function create($id = null, $name = null, $type = null, $location = null, array $tags = null)
    {
        return new self($id, $name, $type, $location, $tags);
    }
}
