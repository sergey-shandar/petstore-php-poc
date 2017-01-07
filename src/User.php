<?php
/**
 */
class User
{
    /**
     * @var int|null
     */
    public $id;

    /**
     * @var string|null
     */
    public $username;

    /**
     * @var string|null
     */
    public $firstName;

    /**
     * @var string|null
     */
    public $lastName;

    /**
     * @var string|null
     */
    public $email;

    /**
     * @var string|null
     */
    public $password;

    /**
     * @var string|null
     */
    public $phone;

    /**
     * @var int|null
     */
    public $userStatus;

    /**
     * @param int|null $id
     * @param string|null $username
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string|null $email
     * @param string|null $password
     * @param string|null $phone
     * @param int|null $userStatus
     */
    public function __construct($id = null, $username = null, $firstName = null, $lastName = null, $email = null, $password = null, $phone = null, $userStatus = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->userStatus = $userStatus;
    }

    /**
     */
    public static function createClassInfo()
    {
        return new RestApiCore\ClassTypeInfo(self::class, [new RestApiCore\PropertyInfo('id', 'id', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('username', 'username', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('firstName', 'firstName', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('lastName', 'lastName', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('email', 'email', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('password', 'password', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('phone', 'phone', RestApiCore\PrimitiveTypeInfo::create()), new RestApiCore\PropertyInfo('userStatus', 'userStatus', RestApiCore\PrimitiveTypeInfo::create())]);
    }
}
