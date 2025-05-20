<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    public function test_add_returns_sum_of_two_numbers()
    {
        $calc = new Calculator();

        $this->assertEquals(5, $calc->add(2, 3));
        $this->assertEquals(0, $calc->add(-1, 1));
        $this->assertEquals(100, $calc->add(40, 60));
    }
}
