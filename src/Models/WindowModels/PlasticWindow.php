<?php

declare(strict_types=1);

namespace Saulius\Window\Models\WindowModels;

use Saulius\Window\Interfaces\WindowAbstract;

class PlasticWindow extends WindowAbstract
{
    public function getMaterial(): string
    {
        return 'Plastic';
    }
    public function description(): string
    {
        if ($this->isInstalled() === 'Yes') {
            return 'I am ' . $this->getMaterial() . ' window. I was installed by Plastic window expert.';
        } else {
            return 'I am ' . $this->getMaterial() . ' window.';
        }
    }
}
