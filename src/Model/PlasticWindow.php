<?php

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowInterface;

class PlasticWindow implements WindowInterface {
    public function __construct()
    {
        $this->material = "Plastic";
        $this->installed = 'No';
    }
}