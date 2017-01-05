<?php

use RestApiCore\HttpClient;

class MockHttpClient implements HttpClient
{
    function request()
    {
        return null;
    }
}