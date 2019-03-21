<?php
declare(strict_types=1);

require 'Circle.php';

try {
    $circle = new Circle(10);
} catch (InvalidArgumentException | TypeError $e) {
    echo $e->getMessage() . "\n";
    exit;
}

echo $circle->getArea() . "\n";
echo $circle->getCircumference() . "\n";