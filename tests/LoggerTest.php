<?php
namespace Pluf\Tests;

use PHPUnit\Framework\TestCase;
use Pluf\Log\Logger;

class LoggerTest extends TestCase
{

    /**
     *
     * @test
     */
    public function callBasicFunctions()
    {
        Logger::debug('hi');
        Logger::error('error');
        Logger::event('event');
        Logger::fatal('fatal');
        Logger::info('info');
        Logger::log('log');
        Logger::perf('perf');
        Logger::warn('warn');

        Logger::flush();

        $this->assertTrue(true);
    }
}

