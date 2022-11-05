<?php

final class ResidentielWay extends HighWay
{
    public function __construct(private int $nbLane = 2, private int $maxSpeed = 50){
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicul(){
        if($vehicule === 'bike' || $vehicule === 'skateboard'){
            return $this->currentVehicules = $vehicule;
        }
    }
}