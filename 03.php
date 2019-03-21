<?php
declare(strict_types=1);

require 'UrlInterface.php';
require 'Url.php';

try {
    $url = new Url('http://yandex.ru?key=value&key2=value2');
} catch (InvalidArgumentException | TypeError $e) {
    echo $e->getMessage() . "\n";
    exit;
}

try {
    echo $url->getScheme() . "\n";
    echo $url->getHost() . "\n";
    print_r($url->getQueryParams());
    echo $url->getQueryParam('key') . "\n";
    echo $url->getQueryParam('key2', 'lala') . "\n";
    echo $url->getQueryParam('new', 'ehu') . "\n";
} catch (TypeError $e) {
    echo $e->getMessage() . "\n";
}
