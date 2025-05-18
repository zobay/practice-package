<?php

namespace Zobay\PracticePackage\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Zobay\PracticePackage\Weight;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    #[Test]
    public function canConvertKilogramsToPounds()
    {
        $pounds = Weight::kilograms(100)->toPounds();

        $this->assertEquals(220.46, $pounds);
    }
}
