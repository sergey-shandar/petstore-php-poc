<?php
namespace RedisManagementClient;

/**
 */
class RedisListResult
{
    /**
     * @var RedisResource[]|null
     */
    public $value;

    /**
     * @var string|null
     */
    public $nextLink;

    /**
     * @param RedisResource[]|null $value
     * @return self
     */
    public function value(array $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param string|null $nextLink
     * @return self
     */
    public function nextLink($nextLink)
    {
        $this->nextLink = $nextLink;
        return $this;
    }

    /**
     * @param RedisResource[]|null $value
     * @param string|null $nextLink
     */
    public function __construct(array $value = null, $nextLink = null)
    {
        $this->value = $value;
        $this->nextLink = $nextLink;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('value', 'value', RedisResource::createClassInfo()->createArray()), new \RestApiCore\PropertyInfo('nextLink', 'nextLink', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param RedisResource[]|null $value
     * @param string|null $nextLink
     * @return self
     */
    public static function create(array $value = null, $nextLink = null)
    {
        return new self($value, $nextLink);
    }
}
