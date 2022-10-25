<?php

declare(strict_types=1);

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowInterface;

class AluminumWindow implements WindowInterface
{
    public function __construct()
    {
        $this->material = "Aluminum";
        $this->installed = 'No';
    }
    public function description(): string {
        if ($this->installed === 'yes') {
            return 'I am ' . $this->material . ' window. I was installed by Aluminum window master.';
        } else {
            return 'I am ' . $this->material . ' window.';
        }
    }
}
