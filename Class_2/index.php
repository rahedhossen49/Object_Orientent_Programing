<?php



// //! Overridding

// class Overridding {

// function __construct(protected $HumanName)
// {

// }
//   function GetName($time){

//     echo "my name is  $this->HumanName";
//   }

//  function Gereeitng(){

//   echo "Hello There How are You";
//  }


// }

// class Ai extends Overridding{

//   function GetName($time){

//     echo "my ai name is $this->HumanName";
//   }
// }

// $Sofia = new Ai("Sofia");
// $Sofia->GetName('1');




// //! Static

// class Human {

//   public static $VottingAge = 18;


//   function GetVottingAge(){
//     echo "Our votting age".self::$VottingAge;
//   }
// }


// class Ai extends Human {

//   public static $VottingAge = "You are not Acceptable";

//   static function GetAIVottingAge(){
//     echo "Votting   ".parent::$VottingAge;
//     // echo "Votting   ".self::$VottingAge;

//   }

// }

//  Ai::GetAIVottingAge();



//! Trait


// include './Traits/UploadMedia.php';

// class Human {

// use UploadMedia;

// }


// $UploadImg = new Human();
// $UploadImg->UploadProfileImage()




//! interface And implements


// include './PaymentAbstract.php';
// include './Bkash.php';


// class Payment implements PaymentAbstract,Bkash{


//   function senOtp($email = null, $number=null){

//   }
//  function sucess($userName){

//  }
//  function SendInvoice($email){

//   }

// }











?>
