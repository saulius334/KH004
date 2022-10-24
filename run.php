<?php

use Saulius\Window\Model\PlasticWindow;
use Saulius\Window\Model\AluminumWindow;
use Saulius\Window\Model\ExpertWindowInstaller;
use Saulius\Window\Model\MasterWindowInstaller;

require __DIR__ . '/vendor/autoload.php';


$ALWindow = new AluminumWindow();
$PVCWindow = new PlasticWindow();
$master = new MasterWindowInstaller();
$master->installWindow($ALWindow);


print_r($master->installWindow($ALWindow));
// print_r($ALWindow);