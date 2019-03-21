<?php
declare(strict_types=1);

require 'Square.php';
require 'SquaresGenerator.php';

try {
    $square = new Square(10);
} catch (InvalidArgumentException | TypeError $e) {
    echo $e->getMessage() . "\n";
    exit;
}

echo $square->getSide() . "\n";

try {
    $squares = SquaresGenerator::generate(3, 2);
} catch (InvalidArgumentException | TypeError $e) {
    echo $e->getMessage() . "\n";
    exit;
}

print_r($squares);