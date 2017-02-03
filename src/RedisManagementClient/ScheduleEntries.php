<?php
namespace RedisManagementClient;

/**
 */
class ScheduleEntries
{
    /**
     * @var ScheduleEntry[]
     */
    public $scheduleEntries;

    /**
     * @param ScheduleEntry[] $scheduleEntries
     * @return self
     */
    public function scheduleEntries(array $scheduleEntries)
    {
        $this->scheduleEntries = $scheduleEntries;
        return $this;
    }

    /**
     * @param ScheduleEntry[]|null $scheduleEntries
     */
    public function __construct(array $scheduleEntries = null)
    {
        $this->scheduleEntries = $scheduleEntries;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('scheduleEntries', 'scheduleEntries', ScheduleEntry::createClassInfo()->createArray())]);
    }

    /**
     * @param ScheduleEntry[]|null $scheduleEntries
     * @return self
     */
    public static function create(array $scheduleEntries = null)
    {
        return new self($scheduleEntries);
    }
}
