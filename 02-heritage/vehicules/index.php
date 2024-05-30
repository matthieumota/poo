<?php

ini_set('display_errors', 'On');

require '../../easydump/easydump.php';
require 'Vehicle.php';
require 'Car.php';
require 'Plane.php';

$garage = [new Car('Peugeot', new DateTime('2020-01-01'), 50000, 2.4, 5, 90.0, 13000)];
$hangar = [new Plane('Cessna', new DateTime('1984-01-01'), 1200000, 'HELICES', 200)];

foreach (array_merge($garage, $hangar) as $vehicle) {
    var_dump($vehicle->computePrice());
    $vehicle->show();
}
