<?php

interface RandomInterface
{
    public function __construct($seed);

    public function getNext();

    public function reset();
}

class Random implements RandomInterface
{
    public $seed;

    public function __construct($seed)
    {
        $this->seed = $seed;
    }

    public function getNext()
    {
    }

    public function reset()
    {
        return $this->seed;
    }
}