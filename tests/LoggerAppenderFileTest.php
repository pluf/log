<?php
namespace Pluf\Tests;

use PHPUnit\Framework\TestCase;
use Pluf\Log\LoggerAppender;

class LoggerAppenderFileTest extends TestCase
{

    /**
     *
     * @test
     */
    public function createInstance()
    {
        $loggerHandler = new LoggerAppender\File();
        $message = 'hi';
        $loggerHandler->write($message);
        $this->assertNotNull($loggerHandler);
    }
}

