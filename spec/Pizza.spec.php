<?php

declare(strict_types=1);

namespace WeBee\Tests\Spec\Sample;

use WeBee\Sample\Pizza;

describe(
    'Pizza',
    function () {
        it(
            'can be baked',
            function () {
                expect(new Pizza())->toBeAnInstanceOf(Pizza::class);
            }
        );

        it(
            'can not be of wrong size type',
            function () {
                $wrongPizzaSize = function () {
                    return new Pizza('30');
                };

                expect($wrongPizzaSize)->toThrow(new \TypeError());
            }
        );

        it(
            'is of correct size',
            function () {
                $pizza = new Pizza(44);

                expect($pizza->getSize())->toBeAn('integer');
                expect($pizza->getSize())->toBe(44);
            }
        );
    }
);
