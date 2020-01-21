<?php
class Car{
  private $obj;
  public function __construct($obj){
      $this->obj = $obj;
  }
  public function getCar(CarI $car){
      if($car == 'miniven'){
          $this->obj = new Miniven();
      }
      else if($car == 'pass'){
          $this->obj = new PassengerCar();
      }
      else if($car == 'truck'){
          $this->obj = new Truck();
      }
      else{
        throw new \Exception('no such a car');
      }
      return $obj;
  }
  
  public function __clone(){
      if(isset($this->obj)){
        $this->obj = clone $this->obj;   
      }
  }
}

interface CarI{
    public function __clone();
}

class Miniven implements CarI{
  private $weight;
  public function __clone(){
      $this->weight = 200;
  } 
}

class PassengerCar implements CarI{
  private $weight;
  public function __clone(){
      $this->weight = 100;
  } 
}

class Truck implements CarI{
  private $weight;
  public function __clone(){
      $this->weight = 500;
  } 
}

$car = new Car(new Miniven());
var_dump($car);
$car1 = clone $car;
$car2 = clone $car1;
var_dump($car1);
var_dump($car2);

