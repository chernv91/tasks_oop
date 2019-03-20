<?php

class Random extends AbstractRandom
{
    public $seed;
    public $a;
    public $c;
    public $m;
    public $n;
    public $num_array = [];

    public function __construct($seed)
    {
        $this->seed = $seed;
        $this->num_array[] = $seed;
        $xn = $seed;
        $this->m = mt_rand($this->seed + 1, $this->seed * 2);
        $this->a = mt_rand(0, $this->m - 1);
        $this->c = mt_rand(0, $this->m - 1);
        $this->n = $this->m;

        for ($i = 0; $i < $this->n; $i++) {
            $xn1 = ($this->a * $xn + $this->c) % $this->m;
            $this->num_array[] = $xn1;
            $xn = $xn1;
        }

    }

    public function getNext()
    {
        return next($this->num_array);
    }

    public function reset()
    {
        reset($this->num_array);
        return $this->seed;
    }
}