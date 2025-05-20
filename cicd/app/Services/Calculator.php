<?php

namespace App\Services;

class Calculator
{
    /**
     * Suma dos valores y devuelve el resultado.
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
