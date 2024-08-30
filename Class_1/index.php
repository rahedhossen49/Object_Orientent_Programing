<?php

//! First work

// class Car {

//   function forward($speed = 'normal'){
//    echo "The car is moving $speed forward";
//    echo "<br>";
//   }
//   function backward (){
//     echo "The car is moving backward";
//   }

// }

// $ForwardCar = new Car();

// $ForwardCar->forward("Very Fast");


// $BackwardCar = new Car();

// $BackwardCar ->backward();




// echo "<br";




//! Second work

// class Car2  {

//  function __construct($name){
//    echo $name."Hello";
//      }

//  function forward2(){
//    echo "The car is moving forward";
//  }


//   function __destruct(){
//   echo "Hello";
//      }


//  }


//  $cars = new Car2("Toyota");

//  $cars?->forward2();

//Destruct

// $cars = new Car2();
// $cars ->forward2();



//! Third work

// class Car3  {



//  public $carsname = "Bmw";


// }

// $Model = new Car3();
// $Model->carsname = "24 Model";
// echo $Model->carsname;

// $BMW = new Car3();
// echo $BMW ->carsname;





//! Fourth work



// class Car4 {


//  private function forward(){
//   echo "this car is forward";
//  }

//  private function backward(){

//   echo "this car is backward";
//  }


//  public function concat (){

//   $this->forward();
//   $this->backward();
//  }

// }


// $cars = new Car4();
// $cars->concat();





// //! Five work


// class Car {



//     function __construct(public $name, private $speed ){

//       }


//   private  function forward(){
//       echo "the" . $this->name . " car is " . $this->speed . " forward";
//       echo "<br>";
//     }
//  private function carsName(){

//   echo "the " . $this->name . " is car is backward";
//  }


//       public function concat (){

//            $this->forward();
//            $this->carsName();
//       }

// }


// $ForwardCar = new Car("BMW","Very fast");
// $ForwardCar->concat();


// echo "<br>";

// $forwars = new Car("Tesla","Medium fast");
// $forwars->concat();






//! Six work



require_once "./Car.php";
require_once "./ElectricCar.php";




$Cars = new ElectricCar ("BMW","Very fast");
$Cars->charging();
echo "<br>";
$Cars->forward();
$Cars->backward();
echo "<br>";
echo $Cars->typeChack();
