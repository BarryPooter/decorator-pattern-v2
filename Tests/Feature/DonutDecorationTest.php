<?php

class DonutDouble implements \App\Contracts\Donut
{
    public function getDescription(): string
    {
        return (string) "Donut Double";
    }

    public function getCost(): float
    {
        return (float) 1;
    }
}

class ChocolateDonutDouble implements \App\Contracts\Donut
{
    protected $donut;

    public function __construct (\App\Contracts\Donut $donut)
    {
        $this->donut = $donut;
    }

    public function getDescription(): string
    {
        return (string) "Chocolate " . $this->donut->getDescription();
    }

    public function getCost(): float
    {
        return (float) ($this->donut->getCost() + (float) 1);
    }
}

class DonutDecorationTest extends \PHPUnit\Framework\TestCase
{
    public function testDependencyInjection () : void
    {
        $concreteDonut = new DonutDouble();
        $this->assertEquals((float) 1, $concreteDonut->getCost());

        $chocolateDonut = new ChocolateDonutDouble(new DonutDouble());
        $this->assertEquals((float) 2, $chocolateDonut->getCost());
        $this->assertEquals((string) "Chocolate Donut Double", $chocolateDonut->getDescription());
    }
}
