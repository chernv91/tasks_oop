<?php

abstract class AbstractRandom
{
    abstract public function __construct(int $seed);

    abstract public function getNext(): int;

    abstract public function reset(): void;
}
