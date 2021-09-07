<?php


namespace Creational\FactoyMethods2;


interface LoggerFactory
{
    public function createLogger(): Logger;
}