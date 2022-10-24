<?php

declare(strict_types=1);

namespace Saulius\Window\Factories;

use Saulius\Window\Model\PlasticWindow;
use Saulius\Window\Model\AluminumWindow;

class WindowFactory {
    public function createWindow($material)
    {
        return match ($material) {
            'Plastic' => new PlasticWindow(),
            'Aluminum' => new AluminumWindow()
        };
    }
}