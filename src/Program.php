<?php

require_once __DIR__.'/../vendor/autoload.php';
/**

A small program to simulate a basic relationship between the sun,
flowers and birds during the course of a day
 
- the sun rises at 06:00 and sets at 20:00
- birds instantly go to sleep one hour after the sun sets
- birds instantly wake up one hour before the sun rises
- when the sun rises each flower opens at its own random rate for that
day, from 0 to 2 hours
- when the sun sets each flower closes at its own random rate for that
day, from 0 to 2 hours
- a completely open flower can be visited by a bird
- a closing, opening or closed flower cannot be visited by a bird
- a flower can have one of three random colours: red, green or blue and
it's colour cannot be changed
- when a bird visits 2 flowers of the same colour in a row, a new flower
of that colour is created
- birds visit flowers in a random order and cannot visit the same flower
in one day
- sleeping birds cannot take any action
- output of the environment should be given on an hourly basis, in text
format
 
Run the simulation at an hourly frequency(we don't care about minutes or
seconds) for a variable number of days with a variable amount of flowers
and birds.

*/

use Nature\Simulator\Sun;
use Nature\Simulator\Bird;
use Nature\Simulator\Flower;
use Nature\Simulator\Timer;

/**
 * Class Program
 */
class Program
{

    protected $startHour = 0;

    protected $endHour = 23;

    public function run()
    {
        for ($i = 1; $i < 4; $i++){
            $today = new Timer();
            $sun = new Sun(new Timer());
            $bird = new Bird(new Timer());
            $flower = new Flower($sun);
            echo "Day $i\n";
            $this->simulateDay($today, $sun, $bird, $flower);
        }
    }

    /**
     * Simulates a Day
     */
    public function simulateDay(Timer $timer, Sun $sun, Bird $bird, Flower $flower)
    {
        $hour = 0;
        while ($hour <= $this->endHour)
        {
            echo sprintf("The current time is %d:00", $hour);
            $sun->screen($hour);
            $bird->screen($sun, $flower, $hour);
            $flower->screen($hour);
            $timer->screen();
            ++$hour;
        }
    }
}

$program = new Program();
$program->run();