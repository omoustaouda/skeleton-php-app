<?php

namespace CaringCircles\BaseAppSkeleton\Tests\Integration\Service;

use CaringCircles\BaseAppSkeleton\Service\PlaceholderService;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testGetServiceFromContainer(): void
    {
        $service = getContainer()->get(PlaceholderService::class);
        self::assertInstanceOf(PlaceholderService::class, $service);
    }

    public function testGetLogger(): void
    {
        $logger = getLogger();
        self::assertInstanceOf(Logger::class, $logger);
    }
}
