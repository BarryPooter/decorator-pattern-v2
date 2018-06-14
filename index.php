<?php
include_once 'vendor/autoload.php';

$donut = new \App\Classes\SugarDonut(new \App\Classes\ChocolateDonut(new \App\Classes\ConcreteDonut()));
$cost = number_format($donut->getCost(), 2);

echo "{$donut->getDescription()} : €{$cost}";
