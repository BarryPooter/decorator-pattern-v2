<?php
include_once 'vendor/autoload.php';

$sugarChocolateDonut = new \App\Classes\SugarDonut(new \App\Classes\ChocolateDonut(new \App\Classes\ConcreteDonut()));
$cost = number_format($sugarChocolateDonut->getCost(), 2);

echo "{$sugarChocolateDonut->getDescription()} : €{$cost}";
echo '<br/>';

$chocolateDonut = new \App\Classes\ChocolateDonut(new \App\Classes\ConcreteDonut());
$cost = number_format($chocolateDonut->getCost(), 2);
echo "{$chocolateDonut->getDescription()} : €{$cost}";
