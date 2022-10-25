<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

interface WindowInstallerInterface
{
    public function installWindow(WindowAbstract $window): string;
}
