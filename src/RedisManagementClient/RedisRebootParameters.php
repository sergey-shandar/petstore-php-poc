<?php
namespace RedisManagementClient;

/**
 */
class RedisRebootParameters
{
    /**
     * @var string
     */
    public $rebootType;

    /**
     * @var int|null
     */
    public $shardId;

    /**
     * @param string $rebootType
     * @return self
     */
    public function rebootType($rebootType)
    {
        $this->rebootType = $rebootType;
        return $this;
    }

    /**
     * @param int|null $shardId
     * @return self
     */
    public function shardId($shardId)
    {
        $this->shardId = $shardId;
        return $this;
    }

    /**
     * @param string|null $rebootType
     * @param int|null $shardId
     */
    public function __construct($rebootType = null, $shardId = null)
    {
        $this->rebootType = $rebootType;
        $this->shardId = $shardId;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('rebootType', 'rebootType', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('shardId', 'shardId', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param string|null $rebootType
     * @param int|null $shardId
     * @return self
     */
    public static function create($rebootType = null, $shardId = null)
    {
        return new self($rebootType, $shardId);
    }
}
