<?php

namespace Saulius\Window\Client;

use Saulius\Window\Factories\WindowFactory;
use Saulius\Window\Factories\InstallerFactory;
use Saulius\Window\Model\ColorDecorator\RedColor;
use Saulius\Window\Model\ColorDecorator\BlueColor;

require __DIR__ . '/../../vendor/autoload.php';
$windowFactory = new WindowFactory();
$installerFactory = new InstallerFactory();

$master = $installerFactory->callInstaller("Master");
$expert = $installerFactory->callInstaller("Expert");

$plastic = $windowFactory->createWindow('Plastic');
$aluminum = $windowFactory->createWindow('Aluminum');

print_r($plastic);
print_r($aluminum);
print_r($expert->installWindow($plastic) . "\n");
print_r($expert->installWindow($aluminum) . "\n");


$redWindow = new RedColor($plastic);
print_r($redWindow->description() . "\n");



print_r($aluminum->description() . "\n");
$blueAlWindow = new BlueColor($aluminum);
print_r($blueAlWindow->description() . "\n");
print_r($master->installWindow($aluminum) . "\n");
print_r($blueAlWindow->description() . "\n");
