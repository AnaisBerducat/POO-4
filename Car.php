<?php


require_once 'Vehicle.php';


class Car extends Vehicle

{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public function forward(): string
    {
        $this->currentSpeed = 15;
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
    public function start()
    {
        if ($this->hasParkBrake === true);
        {
            throw new Exception("Park brake actived");
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }
}
