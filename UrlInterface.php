<?php

interface UrlInterface
{
    public function getScheme();

    public function getHost();

    public function getQueryParams();

    public function getQueryParam($key, $default_value);
}