<?php

final class PedestrianWay extends HighWay
{
    /**
     * @var integer
     */
    private $nbLane = 1;
    /**
     * @var integer
     */
    private $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle): array
    {
        $currentVehiclesPedestrianWay = $this->getCurrentVehicles();
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard) == true) {
            array_push($currentVehiclesPedestrianWay, $vehicle);
            $this->setCurrentVehicles($currentVehiclesPedestrianWay);
        }
        return $currentVehiclesPedestrianWay;
    }
}