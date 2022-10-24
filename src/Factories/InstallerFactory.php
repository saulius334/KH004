<?php

declare(strict_types=1);

namespace Saulius\Window\Factories;

use Saulius\Window\Model\ExpertWindowInstaller;
use Saulius\Window\Model\MasterWindowInstaller;

class InstallerFactory {
    public function callInstaller($qualification)
    {
        return match ($qualification) {
            'Expert' => new ExpertWindowInstaller($qualification,'Plastic'),
            'Master' => new MasterWindowInstaller($qualification,'Aluminum')
        };
    }
}