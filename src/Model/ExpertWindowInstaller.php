<?php

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowInstallerInterface;

class ExpertWindowInstaller implements WindowInstallerInterface {
    public function __construct()
    {
        $this->name = "Plastic window expert";
        // plastic
    }
    public function installWindow($window)
    {
        return "I, " .$this->name . "installed this " . $window->material . " window.";
    }
}