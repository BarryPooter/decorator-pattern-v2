<?php

namespace App\Classes;

use App\Contracts\Donut;

class ConcreteDonut implements Donut
{
    public function getDescription(): string
    {
        return (string) "Donut";
    }

    public function getCost(): float
    {
        return (float) 1;
    }
}