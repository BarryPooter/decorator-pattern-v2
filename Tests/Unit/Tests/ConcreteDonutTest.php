<?php

namespace Tests;

use App\Classes\ConcreteDonut;
use PHPUnit\Framework\TestCase;

class ConcreteDonutTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new ConcreteDonut();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testGetCostType () : void
    {
        $this->assertTrue(is_float($this->sut->getCost()));
    }

    public function testGetDescriptionType () : void
    {
        $this->assertTrue(is_string($this->sut->getDescription()));
    }
}
