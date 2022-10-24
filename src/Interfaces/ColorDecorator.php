<?php

declare(strict_types=1);

namespace Saulius\Window\Interfaces;

use Saulius\Window\Interfaces\WindowInterface;

abstract class ColorDecorator implements WindowInterface
{
    abstract public function __construct();
}
