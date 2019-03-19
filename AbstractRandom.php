<?php

abstract class AbstractRandom
{
    abstract public function __construct($seed, $n);

    abstract public function getNext();

    abstract public function reset();
}
