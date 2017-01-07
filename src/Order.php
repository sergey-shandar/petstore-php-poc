<?php
/**
 */
class Order
{
    /**
     * @var int|null
     */
    public $id;

    /**
     * @var int|null
     */
    public $petId;

    /**
     * @var int|null
     */
    public $quantity;

    /**
     * @var string|null
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
     * @param int|null $id
     * @param int|null $petId
     * @param int|null $quantity
     * @param string|null $shipDate
     * @param string|null $status
     * @param bool|null $complete
     */
    public function __construct($id = null, $petId = null, $quantity = null, $shipDate = null, $status = null, $complete = null)
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
        return new RestApiCore\ClassTypeInfo(self::class, [new RestApiCore\PropertyInfo('id', 'id', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('petId', 'petId', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('quantity', 'quantity', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('shipDate', 'shipDate', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('status', 'status', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('complete', 'complete', RestApiCore\PrimitiveTypeInfo::create())]);
    }
}
