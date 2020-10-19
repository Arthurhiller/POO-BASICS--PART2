<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Camion.php';

$truck = new Camion('1000','blue','2','electric');
$truck2 = new Camion('2000','red','3','electric');
echo $truck->fullOrNOt();
echo $truck->forward();

echo $truck->addCharge()."<br/>";
echo $truck->getCharge()."<br/>";

echo $truck->fullOrNOt();
echo $truck->brake();
