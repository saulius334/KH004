<?php

declare(strict_types=1);

namespace Saulius\Window\Models\InstallerModels;

use Saulius\Window\Interfaces\InstallerAbstract;

class MasterWindowInstaller extends InstallerAbstract
{
    public function getName(): string
    {
        return "Aluminum window expert";
    }
    public function workWith(): string
    {
        return "Aluminum";
    }
}
