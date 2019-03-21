<?php
declare(strict_types=1);

require 'AbstractRandom.php';
require 'Random.php';

try {
    $seq = new Random(100);
} catch (InvalidArgumentException | TypeError $e) {
    echo $e->getMessage() . "\n";
    exit;
}

$result1 = $seq->getNext();
$result2 = $seq->getNext();
var_dump($result1 !== $result2);
$seq->reset();
$result21 = $seq->getNext();
$result22 = $seq->getNext();
var_dump($result1 === $result21);
var_dump($result2 === $result22);
echo $result1 . "\n";
echo $result2 . "\n";
echo $result21 . "\n";
echo $result22 . "\n";