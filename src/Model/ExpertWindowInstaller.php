<?php

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\InstallerAbstract;
use Saulius\Window\Interfaces\WindowInstallerInterface;

class ExpertWindowInstaller extends InstallerAbstract 
{
    public function __construct($name,$workWith) {
        $this->name = $workWith . " window " . $name;
        $this->workWith = $workWith;
    }
}