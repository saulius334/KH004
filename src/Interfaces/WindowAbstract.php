<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\ProductInterface;

abstract class WindowAbstract implements ProductInterface
{
    public function __construct(private bool $installed = false)
    {
        $this->installed = $installed;
    }
    abstract public function getMaterial(): string;
    abstract public function description(): string;
    public function install(): void
    {
        $this->installed = true;
    }
    public function isInstalled(): bool
    {
        return $this->installed;
    }
}
