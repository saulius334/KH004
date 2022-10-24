<?php

declare(strict_types=1);

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\InstallerAbstract;

class ExpertWindowInstaller extends InstallerAbstract
{
    public function __construct(private string $name, private string $workWith)
    {
        $this->name = $workWith . " window " . $name;
        $this->workWith = $workWith;
    }
}
