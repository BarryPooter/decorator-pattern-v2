<?php

namespace App\Contracts;

interface Donut
{
    public function getDescription() : string;
    public function getCost() : float;
}