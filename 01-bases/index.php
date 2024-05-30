<?php

ini_set('display_errors', 'On');

require_once '../easydump/easydump.php';
require_once 'Calculator.php';
require_once 'User.php';

$c1 = new Calculator();
$c1->add(4);
// $c1->result = 35;
$c1->add(3)->add(5)->add(35);
echo $c1->display();

$c2 = new Calculator(10);
$c2->add(3)->add(5)->sub(3);
echo $c2->display();

EasyDump::debug($c1, $c2);

$u1 = new User('Mota', 'Fiorella', 2000, new DateTime('2019-12-31 00:00:00'));
$u1->setFirstname('fio');
$u1->pay(10000);
echo $u1;
EasyDump::debug($u1);
echo $u1->getFirstname();
echo $u1->age();
