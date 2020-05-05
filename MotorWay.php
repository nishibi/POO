<?php
final class MotorWay extends HighWay
{

    /**
     * @var integer
     */
    private $nbLane = 4;
    /**
     * @var integer
     */
    private $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): array
    {
        $currentVehiclesMotor = $this->getCurrentVehicles();
        if(($vehicle instanceof Car) || ($vehicle instanceof Truck) == true){
            array_push($currentVehiclesMotor, $vehicle);
            $this->setCurrentVehicles($currentVehiclesMotor);
        }
        return $currentVehiclesMotor;
    }
}