<?php


namespace Creational\Prototype2;


class BarBookPrototype extends BookPrototype
{
    protected  $category = 'Bar';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}