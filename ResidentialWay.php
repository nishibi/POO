<?php

final class ResidentialWay extends HighWay
{

    /**
     * @var integer
     */
    private $nbLane = 2;
    /**
     * @var integer
     */
    private $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle): array
    {
        $currentVehiclesResidentialWay = $this->getCurrentVehicles();
        array_push($currentVehiclesResidentialWay, $vehicle);
        $this->setCurrentVehicles($currentVehiclesResidentialWay);
        return $currentVehiclesResidentialWay;
    }
}