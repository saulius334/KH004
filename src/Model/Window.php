<?php

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowInterface;

class Window implements WindowInterface {
    public function __construct($material)
    {
        $this->material = $material;
        $this->installed = false;
    }
}