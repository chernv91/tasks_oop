<?php

interface UrlInterface
{
    public function getScheme(): string;

    public function getHost(): string;

    public function getQueryParams(): array;

    public function getQueryParam(string $key, string $default_value): string;
}