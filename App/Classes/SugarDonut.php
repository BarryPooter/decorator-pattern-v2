<?php

namespace App\Classes;

use App\Contracts\Donut;

class SugarDonut implements Donut
{
    protected $donut;

    public function __construct (Donut $donut)
    {
        $this->donut = $donut;
    }

    public function getDescription(): string
    {
        return "Sugar " . $this->donut->getDescription();
    }

    public function getCost(): float
    {
        return (float) ($this->donut->getCost() + 1.00);
    }
}