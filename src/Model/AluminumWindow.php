<?php

declare(strict_types=1);

namespace Saulius\Window\Model;

use Saulius\Window\Interfaces\WindowAbstract;

class AluminumWindow extends WindowAbstract
{
    public function getMaterial(): string
    {
        return 'Aluminum';
    }
    public function description(): string
    {
        if ($this->isInstalled() === 'Yes') {
            return 'I am ' . $this->getMaterial() . ' window. I was installed by Aluminum window expert.';
        } else {
            return 'I am ' . $this->getMaterial() . ' window.';
        }
    }
}
