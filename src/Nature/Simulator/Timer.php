<?php namespace Nature\Simulator;

/**
 * Class Timer
 */
class Timer implements Checkable
{
    const OFF = false;
    const ON = true;

    protected $hour = 0;

    /**
     * @var boolean
     */
    private $status = false;

    /**
     * Timer constructor.
     * @param int $hour
     */
    public function __construct($hour = 0)
    {
        $this->hour = $hour;
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param int $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function checkStatus($hour = 0)
    {
        return ($this->getStatus() === self::ON) ? self::ON : self::OFF;
    }

    public function screen()
    {
        echo sprintf("\n");
        sleep(2);
        echo sprintf("\n");
    }

}