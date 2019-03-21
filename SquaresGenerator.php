<?php

class SquaresGenerator
{
    public static function generate(float $side, int $count): array
    {
        if ($side <= 0) {
            throw new InvalidArgumentException('Значение стороны должно быть больше 0!');
        }

        if ($count < 1) {
            throw new InvalidArgumentException('Значение количества должно быть больше 0!');
        }

        $squaresArr = [];

        for ($i = 0; $i < $count; $i++) {
            $squaresArr[] = new Square($side);
        }

        return $squaresArr;
    }
}