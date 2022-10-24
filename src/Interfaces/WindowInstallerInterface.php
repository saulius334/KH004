<?php

namespace Saulius\Window\Interfaces;

interface WindowInstallerInterface {
    public function __construct();
    public function installWindow($window);
}