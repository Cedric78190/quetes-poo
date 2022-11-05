<?php

final class MotorWay extends HighWay
{
    public function __construct(private int $nbLane = 4, private int $maxSpeed  = 130){
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicul(){
        if($vehicule != 'bike' || $vehicule != 'skateboard'){
            return $this->currentVehicules = $vehicule;
        }
    }
}