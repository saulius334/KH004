<?php

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\WindowInstallerInterface;

abstract class InstallerAbstract implements WindowInstallerInterface {
    abstract public function __construct($name,$workWith);
    public function installWindow($window) 
    {
        if ($window->material !== $this->workWith) {
            return "Sorry, I don't know how to install this window...";
        }
        $window->installed = "yes";
        return "I, " .$this->name . ", installed this " . $window->material . " window.";
    }
    
}