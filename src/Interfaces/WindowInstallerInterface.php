<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

interface WindowInstallerInterface
{
    public function __construct(string $name, string $workWith);
    public function installWindow(WindowInterface $window): string;
}
