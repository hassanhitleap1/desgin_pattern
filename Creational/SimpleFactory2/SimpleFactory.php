<?php


namespace Creational\SimpleFactory2;


class SimpleFactory
{

    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}