<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use RestApiCore\ApiClient;
use RestApiCore\TestClient;

final class UnitTestClient extends TestClient
{
    function __construct()
    {
        $this->apiClient = new ApiClient(new Client(), 'http://petstore.swagger.io/v2');
    }

    /**
     * @param $expected
     * @param $actual
     */
    public function assertSame($expected, $actual)
    {
        TestCase::assertEquals($expected, $actual);
    }
}