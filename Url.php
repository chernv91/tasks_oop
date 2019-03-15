<?php

class Url implements UrlInterface
{
    public $http;

    public function __construct($http)
    {
        $this->http = $http;
    }

    public function getScheme()
    {
        return parse_url($this->http, PHP_URL_SCHEME);
    }

    public function getHost()
    {
        return parse_url($this->http, PHP_URL_HOST);
    }

    public function getQueryParams()
    {
        $params = parse_url($this->http, PHP_URL_QUERY);
        $params_arr = explode('&', $params);
        $params_arr2 = [];

        foreach ($params_arr as $param) {
            $param = explode('=', $param);
            $params_arr2[$param[0]] = $param[1];
        }

        return $params_arr2;
    }

    public function getQueryParam($key, $default_value = '')
    {
        $result = $default_value;
        $params_arr = $this->getQueryParams();

        if (array_key_exists($key, $params_arr)) {
            $result = $params_arr[$key];
        }

        return $result;
    }
}