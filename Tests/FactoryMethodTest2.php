<?php


namespace Tests;
use Creational\FactoyMethods2\FileLogger;
use Creational\FactoyMethods2\FileLoggerFactory;
use Creational\FactoyMethods2\StdoutLogger;
use Creational\FactoyMethods2\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;


class FactoryMethodTest2 extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}