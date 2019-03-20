<?php

require 'AbstractRandom.php';
require 'Random.php';

$seq = new Random(100);
$result1 = $seq->getNext();
$result2 = $seq->getNext();
var_dump($result1 !== $result2);
$result3 = $seq->reset();
$result21 = $seq->getNext();
$result22 = $seq->getNext();
var_dump($result1 === $result21);
var_dump($result2 === $result22);
echo $result1 . "\n";
echo $result2 . "\n";
echo $result3 . "\n";
echo $result21 . "\n";
echo $result22 . "\n";