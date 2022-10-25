<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\ProductInterface;

abstract class WindowAbstract implements ProductInterface
{
    private $installed;
    public function __construct()
    {
        $this->installed = false;
    }
    abstract public function getMaterial(): string;
    abstract public function description(): string;
    public function isInstalled(): string
    {
        return $this->installed === true ? 'Yes' : 'No';
    }
}
