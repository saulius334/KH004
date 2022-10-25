<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Saulius\Window\Factories\WindowFactory;

use function PHPUnit\Framework\assertNotEmpty;

class WindowTest extends TestCase
{
    public function testWindowFactoryCreate(): void
    {
        $windowFactory = new WindowFactory();
        assertNotEmpty($windowFactory);
    }
    public function testWindowPlasticCreate(): void
    {
        $windowFactory = new WindowFactory();
        $plasticWindow = $windowFactory->createWindow('Plastic');
        assertNotEmpty($plasticWindow);
    }
}
