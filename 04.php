<?php

require 'Square.php';
require 'SquaresGenerator.php';

$square = new Square(10);
echo $square->getSide() . "\n";

$squares = SquaresGenerator::generate(3, 2);
print_r($squares);