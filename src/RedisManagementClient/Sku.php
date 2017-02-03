<?php
namespace RedisManagementClient;

/**
 */
class Sku
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $family;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @param string $name
     * @return self
     */
    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $family
     * @return self
     */
    public function family($family)
    {
        $this->family = $family;
        return $this;
    }

    /**
     * @param int $capacity
     * @return self
     */
    public function capacity($capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * @param string|null $name
     * @param string|null $family
     * @param int|null $capacity
     */
    public function __construct($name = null, $family = null, $capacity = null)
    {
        $this->name = $name;
        $this->family = $family;
        $this->capacity = $capacity;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('name', 'name', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('family', 'family', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('capacity', 'capacity', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param string|null $name
     * @param string|null $family
     * @param int|null $capacity
     * @return self
     */
    public static function create($name = null, $family = null, $capacity = null)
    {
        return new self($name, $family, $capacity);
    }
}
