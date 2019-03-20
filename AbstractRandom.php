<?php

abstract class AbstractRandom
{
    abstract public function __construct($seed);

    abstract public function getNext();

    abstract public function reset();
}
