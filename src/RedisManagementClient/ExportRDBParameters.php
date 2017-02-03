<?php
namespace RedisManagementClient;

/**
 */
class ExportRDBParameters
{
    /**
     * @var string|null
     */
    public $format;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $container;

    /**
     * @param string|null $format
     * @return self
     */
    public function format($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @param string $prefix
     * @return self
     */
    public function prefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @param string $container
     * @return self
     */
    public function container($container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * @param string|null $format
     * @param string|null $prefix
     * @param string|null $container
     */
    public function __construct($format = null, $prefix = null, $container = null)
    {
        $this->format = $format;
        $this->prefix = $prefix;
        $this->container = $container;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('format', 'format', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('prefix', 'prefix', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('container', 'container', \RestApiCore\Type\PrimitiveType::create())]);
    }

    /**
     * @param string|null $format
     * @param string|null $prefix
     * @param string|null $container
     * @return self
     */
    public static function create($format = null, $prefix = null, $container = null)
    {
        return new self($format, $prefix, $container);
    }
}
