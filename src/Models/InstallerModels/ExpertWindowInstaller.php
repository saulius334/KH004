<?php

declare(strict_types=1);

namespace Saulius\Window\Models\InstallerModels;

use Saulius\Window\Interfaces\InstallerAbstract;

class ExpertWindowInstaller extends InstallerAbstract
{
    public function getName(): string
    {
        return "Plastic window expert";
    }
    public function workWith(): string
    {
        return "Plastic";
    }
}
