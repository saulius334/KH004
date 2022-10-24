<?php

use Saulius\Window\Factories\InstallerFactory;
use Saulius\Window\Factories\WindowFactory;

require __DIR__ . '/vendor/autoload.php';

$windowFactory = new WindowFactory();
$installerFactory = new InstallerFactory();

$master = $installerFactory->callInstaller("Master");
$expert = $installerFactory->callInstaller("Expert");

$plastic = $windowFactory->createWindow('Plastic');
$al = $windowFactory->createWindow('Aluminum');

print_r($plastic);
print_r($expert->installWindow($plastic));
// $expert->paintWindow($plastic,'red');
// print_r($expert->installWindow($al));
print_r($plastic);
// print_r($al);