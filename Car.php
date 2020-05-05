<?php
//Car.php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var boolean
     */
    private $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function setParkBrake()
    {
        if($this->hasParkBrake == true){
            $this->hasParkBrake = false;
        }else{
            $this->hasParkBrake = true;
        }
    }
    public function start()
    {
        try {
            if($this->hasParkBrake == true){
                throw new Exception();
            }
        }
        catch(Exception $e){
            echo "Le frein à main est enclenché <br>";
            $this->setParkBrake();
            echo "Problème réglé <br>";
        }
        finally{
            echo "Ma voiture roule comme un donut<br>";
        }
    }
}