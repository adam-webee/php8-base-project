<?php

declare(strict_types=1);

namespace WeBee\Tests\Unit\Sample;

use PHPUnit\Framework\TestCase;
use WeBee\Sample\Pizza;

final class PizzaTest extends TestCase
{
    public function testMakingPizza()
    {
        $this->assertInstanceOf(
            Pizza::class,
            new Pizza(5),
            'Pizza baked successfully'
        );
    }

    public function testMakingPizzaOfWrongSizeType()
    {
        $this->expectException(\TypeError::class);

        new Pizza('30');
    }

    public function testGettingPizzaSize()
    {
        $pizza = new Pizza(44);

        $this->assertSame(44, $pizza->getSize(), 'Pizza size is correct');
    }
}
