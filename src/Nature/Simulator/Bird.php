<?php namespace Nature\Simulator;

/**
 * Class Bird
 */
class Bird
{
    protected $timer;



    /**
     * @return mixed
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * @param mixed $timer
     */
    public function setTimer($timer)
    {
        $this->timer = $timer;
    }

    /**
     * Wakes up at 05:00
     */
    protected function wakeUp(Sun $sun)
    {
        $wakeUp = $sun->rising() - 1;
        $this->timer = new Timer($wakeUp);
        $this->timer->setStatus(Timer::ON);

        return $this->timer->getHour();
    }

    /**
     * Sleeps at 21:00
     */
    protected function sleep(Sun $sun)
    {
        $wakeUp = $sun->setting() + 1;
        $this->timer = new Timer($wakeUp);
        $this->timer->setStatus(Timer::ON);

        return $this->timer->getHour();
    }

    /**
     * Checks whether Bird can visit flower
     * @param Flower $flower
     * @param $hour
     * @return bool
     */
    public function canVisit(Flower $flower, $hour)
    {
        return $flower->checkStatus($hour) ;
    }

    /**
     * Outputs to screen
     * @param $hour
     */
    public function screen(Sun $sun, Flower $flower, $hour)
    {
        if ($hour == $this->wakeUp($sun)){
            echo "\n";
            echo sprintf('Bird wakes up.');
            echo "\n";
        }

        if ($hour == $this->sleep($sun)){
            echo "\n";
            echo sprintf('Bird sleeps.');
            echo "\n";
        }

        if ($this->canVisit($flower, $hour) && ($hour > $this->wakeUp($sun)) && ($hour < $this->sleep($sun)))
        {
            echo "\n";
            echo sprintf('Bird can visit flower.');
            echo "\n";
        }


    }
}