<?php namespace Nature\Simulator;

/**
 * Class Flower
 */
class Flower
{
    const CLOSE = false;
    const OPEN = true;

    protected $opening = 0;
    protected $opened = 0;
    protected $closing = 0;
    protected $closed = 0;

    /**
     * @var
     */
    protected $status;

    /**
     * @var mixed
     */
    protected $colour;

    /**
     * Flower constructor.
     */
    public function __construct(Sun $sun)
    {
        $colour = ['RED', 'BLUE', 'GREEN'];
        $this->setColour($colour[ rand(0, 2) ]);
        $this->setOpening($sun);
        $this->setClosing($sun);
    }

    /**
     * Has a random opening rate
     * @return float
     */
    public function setOpening(Sun $sun)
    {
        $hour = (int)rand($sun->rising(), $sun->setting());
        $this->opening = $hour;
        $this->opened = $this->opening + 2;;
    }

    /**
     * Sets closing time
     * @return float
     */
    public function setClosing(Sun $sun)
    {
        $hour = (int)rand($sun->setting(), $sun->setting() + 2);
        $this->closing = $hour;
        $this->closed = $this->closing + 2;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour;
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
    public function checkStatus($hour)
    {
        if ($this->opened == $hour){
            $this->setStatus(self::OPEN);
        }

        if ($this->closed == $hour){
            $this->setStatus(self::CLOSE);
        }

        return $this->getStatus();
    }


    /**
     * Outputs to screen
     * @param $hour
     */
    public function screen($hour)
    {
        if ($hour == $this->opening){
            echo "\n";
            echo sprintf('Flower is '.$this->colour);
            echo "\n";
            echo sprintf('Flower is opening');
            echo "\n";
        }

        if ($hour == $this->opened){
            echo "\n";
            echo sprintf('Flower is opened');
            echo "\n";
        }


        if ($hour == $this->closed){
            echo "\n";
            echo sprintf('Flower is closed');
            echo "\n";
        }

        if ($hour == $this->closing){
            echo "\n";
            echo sprintf('Flower is closing');
            echo "\n";
        }
    }


}
