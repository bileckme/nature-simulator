<?php namespace Nature\Simulator;

/**
 * Class Sun
 */
class Sun implements Checkable
{
    /**
     * @var Timer
     */
    protected $timer;

    protected $status;

    /**
     * Sun constructor.
     * @param Timer $timer
     */
    public function __construct(Timer $timer)
    {
        $this->setTimer($timer);
    }


    /**
     * Rising at 06:00
     */
    public function rising()
    {
        $this->timer->setStatus(Timer::ON);
        $this->timer->setHour(6);

        return $this->timer->getHour();
    }

    /**
     * Setting at 20:00
     */
    public function setting()
    {
        $this->timer->setStatus(Timer::OFF);
        $this->timer->setHour(20);

        return $this->timer->getHour();
    }

    public function checkStatus($hour = 0)
    {
        return ($this->timer->getStatus() === Timer::ON) ? Timer::ON : Timer::OFF;
    }

    /**
     * @return Timer
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * @param Timer $timer
     */
    public function setTimer(Timer $timer)
    {
        $this->timer = $timer;
    }

    /**
     * Outputs to screen
     * @param $hour
     */
    public function screen($hour)
    {
        if ($hour == $this->rising()){
            echo "\n";
            echo sprintf('Sun is rising');
            echo "\n";
        }

        if ($hour == $this->setting()){
            echo "\n";
            echo sprintf('Sun is setting');
            echo "\n";
        }
    }
}