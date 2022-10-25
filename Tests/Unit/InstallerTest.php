<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Saulius\Window\Factories\InstallerFactory;

use function PHPUnit\Framework\assertNotEmpty;

class InstallerTest extends TestCase
{
    public function testInstallerFactoryCreate(): void
    {
        $installerFactory = new InstallerFactory();
        assertNotEmpty($installerFactory);
    }
    public function testInstallerPlasticCreate(): void
    {
        $installerFactory = new InstallerFactory();
        $master = $installerFactory->callInstaller('Master');
        assertNotEmpty($master);
    }
}
