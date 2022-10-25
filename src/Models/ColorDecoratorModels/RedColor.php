<?php

declare(strict_types=1);

namespace Saulius\Window\Models\ColorDecoratorModels;

use Saulius\Window\Interfaces\ColorDecorator;

class RedColor extends ColorDecorator
{
    public function description(): string
    {
        return $this->getWindow()->description() . ' Also I am red color. Jelly ?';
    }
}
