<?php

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return round(M_PI * $this->radius ** 2, 2);
    }

    public function getCircumference()
    {
        return round(2 * M_PI * $this->radius, 2);
    }
}