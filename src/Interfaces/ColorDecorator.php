<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\ProductInterface;

class ColorDecorator implements ProductInterface
{
    public function __construct(private WindowAbstract $window)
    {
    }
    public function getWindow()
    {
        return $this->window;
    }
    public function description(): string
    {
        return $this->getWindow()->description();
    }
}
