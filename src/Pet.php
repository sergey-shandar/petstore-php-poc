<?php
/**
 */
class Pet
{
    /**
     * @var int|null
     */
    public $id;

    /**
     * @var Category|null
     */
    public $category;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $photoUrls;

    /**
     * @var Tag[]|null
     */
    public $tags;

    /**
     * @var string|null
     */
    public $status;

    /**
     * @param int|null $id
     * @param Category|null $category
     * @param string|null $name
     * @param string[]|null $photoUrls
     * @param Tag[]|null $tags
     * @param string|null $status
     */
    public function __construct($id = null, Category $category = null, $name = null, array $photoUrls = null, array $tags = null, $status = null)
    {
        $this->id = $id;
        $this->category = $category;
        $this->name = $name;
        $this->photoUrls = $photoUrls;
        $this->tags = $tags;
        $this->status = $status;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new RestApiCore\ClassTypeInfo(self::class, [new RestApiCore\PropertyInfo('id', 'id', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('category', 'category', Category::createClassInfo()), new RestApiCore\PropertyInfo('name', 'name', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('photoUrls', 'photoUrls', RestApiCore\PrimitiveTypeInfo::create()->createArray()), new RestApiCore\PropertyInfo('tags', 'tags', Tag::createClassInfo()->createArray()), new RestApiCore\PropertyInfo('status', 'status', RestApiCore\PrimitiveTypeInfo::create())]);
    }
}
