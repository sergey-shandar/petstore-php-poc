<?php
namespace SwaggerPetstore;

/**
 */
class User
{
    /**
     * @var string|null
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
     * @param string|null $id
     * @return self
     */
    public function id($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $username
     * @return self
     */
    public function username($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param string|null $firstName
     * @return self
     */
    public function firstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param string|null $lastName
     * @return self
     */
    public function lastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string|null $email
     * @return self
     */
    public function email($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string|null $password
     * @return self
     */
    public function password($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param string|null $phone
     * @return self
     */
    public function phone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param int|null $userStatus
     * @return self
     */
    public function userStatus($userStatus)
    {
        $this->userStatus = $userStatus;
        return $this;
    }

    /**
     * @param string|null $id
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
        return new \RestApiCore\ClassTypeInfo(self::class, [new \RestApiCore\PropertyInfo('id', 'id', \RestApiCore\LongTypeInfo::create()), new \RestApiCore\PropertyInfo('username', 'username', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('firstName', 'firstName', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('lastName', 'lastName', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('email', 'email', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('password', 'password', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('phone', 'phone', \RestApiCore\PrimitiveTypeInfo::create()), new \RestApiCore\PropertyInfo('userStatus', 'userStatus', \RestApiCore\PrimitiveTypeInfo::create())]);
    }

    /**
     * @param string|null $id
     * @param string|null $username
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string|null $email
     * @param string|null $password
     * @param string|null $phone
     * @param int|null $userStatus
     * @return self
     */
    public static function create($id = null, $username = null, $firstName = null, $lastName = null, $email = null, $password = null, $phone = null, $userStatus = null)
    {
        return new self($id, $username, $firstName, $lastName, $email, $password, $phone, $userStatus);
    }
}
