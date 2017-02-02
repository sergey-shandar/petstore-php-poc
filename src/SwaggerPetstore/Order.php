<?php
namespace SwaggerPetstore;

/**
 */
class Order
{
    /**
     * @var string|null
     */
    public $id;

    /**
     * @var string|null
     */
    public $petId;

    /**
     * @var int|null
     */
    public $quantity;

    /**
     * @var \DateTime|null
     */
    public $shipDate;

    /**
     * @var string|null
     */
    public $status;

    /**
     * @var bool|null
     */
    public $complete;

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
     * @param string|null $petId
     * @return self
     */
    public function petId($petId)
    {
        $this->petId = $petId;
        return $this;
    }

    /**
     * @param int|null $quantity
     * @return self
     */
    public function quantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param \DateTime|null $shipDate
     * @return self
     */
    public function shipDate(\DateTime $shipDate)
    {
        $this->shipDate = $shipDate;
        return $this;
    }

    /**
     * @param string|null $status
     * @return self
     */
    public function status($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param bool|null $complete
     * @return self
     */
    public function complete($complete)
    {
        $this->complete = $complete;
        return $this;
    }

    /**
     * @param string|null $id
     * @param string|null $petId
     * @param int|null $quantity
     * @param \DateTime|null $shipDate
     * @param string|null $status
     * @param bool|null $complete
     */
    public function __construct($id = null, $petId = null, $quantity = null, \DateTime $shipDate = null, $status = null, $complete = null)
    {
        $this->id = $id;
        $this->petId = $petId;
        $this->quantity = $quantity;
        $this->shipDate = $shipDate;
        $this->status = $status;
        $this->complete = $complete;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new \RestApiCore\ClassTypeInfo(self::class, [new \RestApiCore\PropertyInfo('id', 'id', \RestApiCore\LongTypeInfo::create()), new \RestApiCore\PropertyInfo('petId', 'petId', \RestApiCore\LongTypeInfo::create()), new \RestApiCore\PropertyInfo('quantity', 'quantity', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('shipDate', 'shipDate', \RestApiCore\DateTimeTypeInfo::create()), new \RestApiCore\PropertyInfo('status', 'status', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('complete', 'complete', \RestApiCore\PrimitiveTypeInfo::create())]);
    }

    /**
     * @param string|null $id
     * @param string|null $petId
     * @param int|null $quantity
     * @param \DateTime|null $shipDate
     * @param string|null $status
     * @param bool|null $complete
     * @return self
     */
    public static function create($id = null, $petId = null, $quantity = null, \DateTime $shipDate = null, $status = null, $complete = null)
    {
        return new self($id, $petId, $quantity, $shipDate, $status, $complete);
    }
}
