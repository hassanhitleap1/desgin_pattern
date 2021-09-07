<?php


namespace Creational\FactoyMethods2;


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}