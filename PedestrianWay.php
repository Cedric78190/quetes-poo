<?php

final class PedestrianWay extends HighWay
{
    public function __construct( private int $nbLane = 1, private int $maxSpeed = 10){
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicul(){
        if($vehicule === 'bike' || $vehicule === 'skateboard'){
            return $this->currentVehicules = $vehicule;
        }
    }
    
}