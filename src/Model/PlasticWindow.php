<?php

declare(strict_types=1);

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowInterface;

class PlasticWindow implements WindowInterface
{
    public function __construct()
    {
        $this->material = "Plastic";
        $this->installed = 'No';
    }
    public function description(): string {
        if ($this->installed === 'yes') {
            return 'I am ' . $this->material . ' window. I was installed by Plastic window expert.';
        } else {
            return 'I am ' . $this->material . ' window.';
        }
    }
}
