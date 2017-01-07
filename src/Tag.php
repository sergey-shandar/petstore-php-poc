<?php
/**
 */
class Tag
{
    /**
     * @var int|null
     */
    public $id;

    /**
     * @var string|null
     */
    public $name;

    /**
     * @param int|null $id
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
        return new RestApiCore\ClassTypeInfo(self::class, [new RestApiCore\PropertyInfo('id', 'id', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('name', 'name', RestApiCore\PrimitiveTypeInfo::create())]);
    }
}
