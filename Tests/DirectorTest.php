<?php


namespace Tests;


use Creational\Builder2\Parts\Car;
use Creational\Builder2\Parts\Truck;
use Creational\Builder2\TruckBuilder;
use Creational\Builder2\CarBuilder;
use Creational\Builder2\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends  TestCase
{

    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}