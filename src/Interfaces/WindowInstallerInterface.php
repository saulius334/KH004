<?php

namespace Saulius\Window\Interfaces;

interface WindowInstallerInterface {
    public function __construct($name,$workWith);
    public function installWindow($window);
}