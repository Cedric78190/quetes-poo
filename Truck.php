<?php

class Truck extends Vehicule
{
    public const ALLOWED_ENERGIES = [
        'essence',
        'electric'
    ];

    private int $capacity;
    private int $filling = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity){
        parent::__construct($color, $nbSeats);
        $this->setCapacity($capacity);
        $this->setEnergy($energy);
    }

    public function setEnergy(string $energy): Truck{
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

   

    public function setFilling(int $filling): void {
        $this->filling = $filling;
    }

    public function infilling(): string 
    {
    if($this->filling < $this->capacity){
        return 'in filing';
    }else{
        return 'full';
    }
    }
    public function getCapacity(){
        return $this->$capacity;
    }

    public function setCapacity(int $capacity): void {
           if($capacity > 0){
             $this->capacity = $capacity;
           }
    }

    public function changeWheel()
    {
        
    }
}