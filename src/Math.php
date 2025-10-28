<?php

namespace App;

class Math
{
const PI = '3.14159842'; 

    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function substract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new \InvalidArgumentException('Division by zero.');
        }
        return $a / $b;
    }
}
