<?php

declare(strict_types=1);

namespace Saulius\Window\Factories;

use Saulius\Window\Interfaces\WindowInstallerInterface;
use Saulius\Window\Model\ExpertWindowInstaller;
use Saulius\Window\Model\MasterWindowInstaller;

class InstallerFactory
{
    public function callInstaller(string $qualification): WindowInstallerInterface
    {
        return match ($qualification) {
            'Expert' => new ExpertWindowInstaller(),
            'Master' => new MasterWindowInstaller()
        };
    }
}
