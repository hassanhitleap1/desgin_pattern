<?php


namespace Creational\Bulider2;

use Creational\Bulider2\Parts\Door;
use Creational\Bulider2\Parts\Engine;
use Creational\Bulider2\Parts\Wheel;
use Creational\Bulider2\Parts\Car;
use Creational\Bulider2\Parts\Vehicle;

class CarBuilder
{
    private Car $car;
    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }


}