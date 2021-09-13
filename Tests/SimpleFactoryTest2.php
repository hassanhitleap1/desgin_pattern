<?php


namespace Tests;


use PHPUnit\Framework\TestCase;

class SimpleFactoryTest2 extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}