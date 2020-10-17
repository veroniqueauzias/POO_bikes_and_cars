<?php
class Car
{
    // properties
    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var integer
     */
    private $energyLevel;



    // constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    //Methods
    public function start()
    {
        return "Go !";
    }

    public function forward()
    {
        return "faster!";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed = $this->currentSpeed-10;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // getters - setters
    /**
     * @param integer $nbWheels
     */
    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
    /**
     * @return integer
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
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

    public function setNbSeats(int $nbSeats)
    {
        $this->nbWheels = $nbSeats;
    }
    /**
     * @return integer
     */
    public function getNbSeats(): integar
    {
        return $this->nbSeats;
    }

    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergyLevel (int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }
    /**
     * @return string
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

}