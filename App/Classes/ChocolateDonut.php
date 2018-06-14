<?php

namespace App\Classes;

use App\Decorator\DonutDecorator;

class ChocolateDonut extends DonutDecorator
{
    public function getDescription(): string
    {
        return "Chocolate " . $this->donut->getDescription();
    }

    public function getCost(): float
    {
        return (float) ($this->donut->getCost() + 1.50);
    }
}