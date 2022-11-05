<?php

abstract class HighWay
{
    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;

    public function getCurrentVehicles(){
        $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void{
        $this->currentVehicles = $currentVehicles;
    }

    public function getNblane(){
        $this->nbLane;
    }

    public function setnbLane($nbLane): void{
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(){
        $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): void{
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicule(Vehicule $vehicule);
}