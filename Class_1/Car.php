<?php



class Car
{



  function __construct(protected $CarName, public $speed) {}


  function forward()
  {
    echo "the" . $this->CarName . " car is " . $this->speed . " forward";
    echo "<br>";
  }
  function backward()
  {

    echo "the " . $this->CarName . " is car is backward";
  }


  protected function forwardbackward(){

    return $this->forward();

  }
}


?>