<?php

class Square
{
    private $side;

    public function __construct(float $side)
    {
        if ($side <= 0) {
            throw new InvalidArgumentException('Значение должно быть больше 0!');
        }

        $this->side = $side;
    }

    public function getSide(): float
    {
        return $this->side;
    }
}