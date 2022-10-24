<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\WindowInstallerInterface;

abstract class InstallerAbstract implements WindowInstallerInterface
{
    abstract public function __construct(string $name, string $workWith);
    public function installWindow(WindowInterface $window): string
    {
        if ($window->material !== $this->workWith) {
            return "Sorry, I don't know how to install this window...";
        }
        $window->installed = "yes";
        return "I, " . $this->name . ", installed this " . $window->material . " window.";
    }
}
