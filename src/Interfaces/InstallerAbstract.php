<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\WindowInstallerInterface;

abstract class InstallerAbstract implements WindowInstallerInterface
{
    public function __construct()
    {
    }
    abstract public function getName(): string;
    abstract public function workWith(): string;
    public function installWindow(WindowAbstract $window): string
    {
        if ($window->getMaterial() !== $this->workWith()) {
            return "Sorry, I don't know how to install this window...";
        }
        $window->installed = true;
        return "I, " . $this->getName() . ", installed this " . $window->getMaterial() . " window.";
    }
}
