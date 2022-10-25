<?php

declare(strict_types=1);

namespace Saulius\Window\Factories;

use Saulius\Window\Interfaces\WindowAbstract;
use Saulius\Window\Model\PlasticWindow;
use Saulius\Window\Model\AluminumWindow;

class WindowFactory
{
    public function createWindow(string $material): WindowAbstract
    {
        return match ($material) {
            'Plastic' => new PlasticWindow(),
            'Aluminum' => new AluminumWindow()
        };
    }
}
