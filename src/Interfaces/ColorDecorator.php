<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\WindowInterface;

abstract class ColorDecorator implements WindowInterface
{
    public function __construct(public WindowInterface $window) {}
    public function description(): string 
    {
        return $this->window->description();
    }
}
