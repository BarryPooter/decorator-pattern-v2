<?php

namespace App\Decorator;

use App\Contracts\Donut;

abstract class DonutDecorator implements Donut
{
    protected $donut;

    public function __construct (Donut $donut)
    {
        $this->donut = $donut;
    }
}