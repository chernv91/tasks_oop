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
        return M_PI * $this->radius * $this->radius;
    }

    public function getCircumference()
    {
        return 2 * M_PI * $this->radius;
    }

}