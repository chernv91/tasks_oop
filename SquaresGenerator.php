<?php

class SquaresGenerator
{
    public static function generate($side, $count)
    {
        $result = [];

        for ($i = 0; $i < $count; $i++) {
            $result[] = new Square($side);
        }

        return $result;
    }
}