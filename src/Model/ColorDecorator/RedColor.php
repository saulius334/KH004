<?php

declare(strict_types=1);

namespace Saulius\Window\Model\ColorDecorator;

use Saulius\Window\Interfaces\ColorDecorator;

class RedColor extends ColorDecorator
{
    public function description(): string 
    {
        return $this->window->description() . ' Also I am red color. Jelly ?';
    }
}
