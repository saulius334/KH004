<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\ColorDecorator;
use Saulius\Window\Interfaces\WindowInterface;

class RedWindow extends ColorDecorator
{
    public function __construct(WindowInterface $window)
    {
        $this->window = $window;
        $window->color = "Red";
    }
}
