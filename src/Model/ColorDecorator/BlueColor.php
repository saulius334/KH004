<?php

declare(strict_types=1);

namespace Saulius\Window\Model\ColorDecorator;

use Saulius\Window\Interfaces\ColorDecorator;

class BlueColor extends ColorDecorator
{
    public function description(): string
    {
        return $this->getWindow()->description() . ' im blue dabu dee dabu die';
    }
}
