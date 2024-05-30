<?php

ini_set('display_errors', 'On');

require '../easydump/easydump.php';
require 'Animal.php';
require 'Cat.php';
require 'Dog.php';
require 'Kennel.php';

$bianca = new Cat('Bianca', 4);
var_dump($bianca);
var_dump($bianca->present());
var_dump($bianca->move());
var_dump($bianca->climbsOnRoof());

$medor = new Dog('Medor');
var_dump($medor->present());
var_dump($medor->move());

$kennel = new Kennel();
$kennel->add($medor);
$kennel->add($bianca);
EasyDump::debug($kennel);
$kennel->call();
