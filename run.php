<?php

use Saulius\Window\Factories\WindowFactory;
use Saulius\Window\Factories\InstallerFactory;
use Saulius\Window\Model\ColorDecorator\RedColor;

require __DIR__ . '/vendor/autoload.php';

$windowFactory = new WindowFactory();
$installerFactory = new InstallerFactory();

$master = $installerFactory->callInstaller("Master");
$expert = $installerFactory->callInstaller("Expert");

$plastic = $windowFactory->createWindow('Plastic');
$al = $windowFactory->createWindow('Aluminum');

print_r($plastic);


$redWindow = new RedColor($plastic);
print_r($redWindow->description());
// print_r($al);