<?php

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowInterface;

class AluminumWindow implements WindowInterface {
    public function __construct()
    {
        $this->material = "Aluminum";
        $this->installed = 'No';
    }
}