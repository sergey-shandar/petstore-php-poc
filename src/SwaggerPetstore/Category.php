<?php
namespace SwaggerPetstore;

/**
 */
class Category
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
     * @param string|null $id
     * @param string|null $name
     */
    public function __construct($id = null, $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('id', 'id', \RestApiCore\Type\LongType::create()), new \RestApiCore\PropertyInfo('name', 'name', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param string|null $id
     * @param string|null $name
     * @return self
     */
    public static function create($id = null, $name = null)
    {
        return new self($id, $name);
    }
}
