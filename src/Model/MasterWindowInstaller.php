<?php

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowInstallerInterface;

class MasterWindowInstaller implements WindowInstallerInterface {
    public function __construct()
    {
        $this->name = "Aluminum window expert";
        // aluminum
    }
    public function installWindow($window)
    {
        if ($window->material !== "Aluminum") {
            return "Sorry, I don't know how to install this window...";
        }
        $window->installed = "yes";
        return "I, " .$this->name . ", installed this " . $window->material . " window.";
    }
}