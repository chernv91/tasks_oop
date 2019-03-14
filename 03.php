<?php

require 'UrlInterface.php';
require 'Url.php';

$url = new Url('http://yandex.ru?key=value&key2=value2');

echo $url->getScheme() . "\n";
echo $url->getHost() . "\n";
print_r($url->getQueryParams());
echo $url->getQueryParam('key') . "\n";
echo $url->getQueryParam('key2', 'lala') . "\n";
echo $url->getQueryParam('new', 'ehu') . "\n";