<?php

namespace Tests;

use App\Contracts\Donut;
use PHPUnit\Framework\TestCase;

class DonutDouble implements Donut
{
    public function getDescription(): string
    {
        return (string) "Test";
    }

    public function getCost(): float
    {
        return (float) 5;
    }
}

class DonutContractTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new DonutDouble();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testGetCost () : void
    {
        $this->assertTrue(is_float($this->sut->getCost()));
        $this->assertEquals((float) 5, $this->sut->getCost());
    }

    public function testGetDescription () : void
    {
        $this->assertTrue(is_string($this->sut->getDescription()));
        $this->assertEquals((string) "Test", $this->sut->getDescription());
    }
}
