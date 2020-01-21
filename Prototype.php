<?php
class Car{
    private $weight;
    public $number;
    public $color;
    
    public function getMiniven()
    {
        $this->weight = 200;
        return $this;
    }
    
    public function getPassengerCar()
    {
        $this->weight = 100;
        return $this;
    }
    
    public function getTruck()
    {
        $this->weight = 500;
        return $this;
    }
    
    public function getWeight(){
        return $this->weight;
    }
}

$miniven = (new Car())->getMiniven();
$miniven->number = '1234';
$miniven->color = 'red';
var_dump($miniven);

$mini = clone $miniven;
var_dump($mini);

$passCar = (new Car())->getPassengerCar();
var_dump($passCar);
