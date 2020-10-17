<?php

class Bicycle
{
    // properties
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats = 1;
    /**
     * @var integer
     */
    private $nbWheels = 2;

    // Methods

    // constructeur
    public function __construct(string $color){
        $this->color = $color;
    }

    public function forward()
    {

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed)
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

}