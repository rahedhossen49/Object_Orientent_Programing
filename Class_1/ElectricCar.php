<?php




class ElectricCar extends Car{

  function charging(){
    $this->CarName .= "- 24";
    echo "The $this->CarName car is charging";
  }

  function typeChack() : string{
    return "Hello Type is String";

  }


}




?>