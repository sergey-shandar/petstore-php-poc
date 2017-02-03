<?php
namespace RedisManagementClient;

/**
 */
class ImportRDBParameters
{
    /**
     * @var string|null
     */
    public $format;

    /**
     * @var string[]
     */
    public $files;

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
     * @param string[] $files
     * @return self
     */
    public function files(array $files)
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @param string|null $format
     * @param string[]|null $files
     */
    public function __construct($format = null, array $files = null)
    {
        $this->format = $format;
        $this->files = $files;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('format', 'format', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('files', 'files', \RestApiCore\Type\PrimitiveType::create()->createArray())]);
    }

    /**
     * @param string|null $format
     * @param string[]|null $files
     * @return self
     */
    public static function create($format = null, array $files = null)
    {
        return new self($format, $files);
    }
}
