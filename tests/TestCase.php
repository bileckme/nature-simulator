<?php namespace Nature\Simulator\Tests;

use Nature\Simulator\Bird;
use Nature\Simulator\Flower;
use Nature\Simulator\Sun;
use Nature\Simulator\Timer;
use PHPUnit_Framework_TestCase;

/**
 * Class TestCase
 * @package Nature\Simulator\Tests
 */
class TestCase extends PHPUnit_Framework_TestCase
{
    protected $today;
    protected $sun;
    protected $bird;
    protected $flower;

    public function setUp()
    {
        $this->today = new Timer();
        $this->sun = new Sun(new Timer());
        $this->bird = new Bird(new Timer());
        $this->flower = new Flower($this->sun);
    }

    public function testTimer()
    {
        $this->assertInstanceOf(Timer::class, $this->today);
    }

    public function testBird()
    {
        $this->assertInstanceOf(Bird::class, $this->bird);
    }

    public function testFlower()
    {
        $this->assertInstanceOf(Flower::class, $this->flower);
    }

    public function testSun()
    {
        $this->assertInstanceOf(Sun::class, $this->sun);
        $this->assertClassHasAttribute('timer', Sun::class, $this->sun);
    }


    public function tearDown()
    {
        unset($this->today);
        unset($this->sun);
        unset($this->flower);
        unset($this->bird);
    }
}