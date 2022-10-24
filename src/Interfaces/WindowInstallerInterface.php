<?php

namespace Saulius\Window\Interfaces;

use Saulius\Window\Model\Window;

interface WindowInstallerInterface {
    public function __construct();
    public function installDoor(Window $window): Window;
}