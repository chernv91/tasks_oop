<?php

class Url implements UrlInterface
{
    public $scheme;
    public $host;
    public $params_arr = [];

    public function __construct($http)
    {
        $this->scheme = parse_url($http, PHP_URL_SCHEME);
        $this->host = parse_url($http, PHP_URL_HOST);

        $params = parse_url($http, PHP_URL_QUERY);
        $params_arr2 = explode('&', $params);

        foreach ($params_arr2 as $param) {
            $param = explode('=', $param);
            $this->params_arr[$param[0]] = $param[1];
        }

    }

    public function getScheme()
    {
        return $this->scheme;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getQueryParams()
    {
        return $this->params_arr;
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