<?php

namespace App\Classes;

use App\Contracts\Donut;
use App\Decorator\DonutDecorator;

class SugarDonut extends DonutDecorator
{
    public function getDescription(): string
    {
        return "Sugar " . $this->donut->getDescription();
    }

    public function getCost(): float
    {
        return (float) ($this->donut->getCost() + 1.00);
    }
}