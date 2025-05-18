<?php

namespace Zobay\PracticePackage;

class Weight
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(public float $kilograms)
    {
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
