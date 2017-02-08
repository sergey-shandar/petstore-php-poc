<?php
namespace RedisManagementClient;

/**
 */
class ScheduleEntry
{
    /**
     * @var string
     */
    public $dayOfWeek;

    /**
     * @var int
     */
    public $startHourUtc;

    /**
     * @var \DateInterval|null
     */
    public $maintenanceWindow;

    /**
     * @param string $dayOfWeek
     * @return self
     */
    public function dayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * @param int $startHourUtc
     * @return self
     */
    public function startHourUtc($startHourUtc)
    {
        $this->startHourUtc = $startHourUtc;
        return $this;
    }

    /**
     * @param \DateInterval|null $maintenanceWindow
     * @return self
     */
    public function maintenanceWindow(\DateInterval $maintenanceWindow)
    {
        $this->maintenanceWindow = $maintenanceWindow;
        return $this;
    }

    /**
     * @param string|null $dayOfWeek
     * @param int|null $startHourUtc
     * @param \DateInterval|null $maintenanceWindow
     */
    public function __construct($dayOfWeek = null, $startHourUtc = null, \DateInterval $maintenanceWindow = null)
    {
        $this->dayOfWeek = $dayOfWeek;
        $this->startHourUtc = $startHourUtc;
        $this->maintenanceWindow = $maintenanceWindow;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\Type\ClassType(self::class, [new \RestApiCore\PropertyInfo('dayOfWeek', 'dayOfWeek', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('startHourUtc', 'startHourUtc', \RestApiCore\Type\PrimitiveType::create()), new \RestApiCore\PropertyInfo('maintenanceWindow', 'maintenanceWindow', \RestApiCore\Type\DateIntervalType::create())]);
    }

    /**
     * @param string|null $dayOfWeek
     * @param int|null $startHourUtc
     * @param \DateInterval|null $maintenanceWindow
     * @return self
     */
    public static function create($dayOfWeek = null, $startHourUtc = null, \DateInterval $maintenanceWindow = null)
    {
        return new self($dayOfWeek, $startHourUtc, $maintenanceWindow);
    }
}
