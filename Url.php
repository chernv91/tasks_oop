<?php

class Url implements UrlInterface
{
    private $scheme;
    private $host;
    private $queryParamsArr = [];

    public function __construct(string $http)
    {
        $http = trim($http);

        if (!empty($http)) {
            $this->scheme = parse_url($http, PHP_URL_SCHEME);
            $this->host = parse_url($http, PHP_URL_HOST);
            $queryParams = parse_url($http, PHP_URL_QUERY);

            $tmpArr = explode('&', $queryParams);

            foreach ($tmpArr as $queryParam) {
                $queryParam = explode('=', $queryParam);
                $this->queryParamsArr[$queryParam[0]] = $queryParam[1];
            }

        } else {
            throw new InvalidArgumentException('Передана пустая строка!');
        }

    }

    public function getScheme(): string
    {
        return $this->scheme;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getQueryParams(): array
    {
        return $this->queryParamsArr;
    }

    public function getQueryParam(string $key, string $default_value = ''): string
    {
        $value = $default_value;
        $queryParamsArr = $this->queryParamsArr;

        if (array_key_exists($key, $queryParamsArr)) {
            $value = $queryParamsArr[$key];
        }

        return $value;
    }
}