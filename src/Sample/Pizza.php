<?php

declare(strict_types=1);

namespace WeBee\Sample;

class Pizza
{
    private int $size;

    public function __construct(int $size = 30)
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}
