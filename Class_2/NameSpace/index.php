<?php


use App\Controller\Human;
use App\Model\Robot;



spl_autoload_register(function ($className){

  include $className.'.php';
});




$daniel = new Robot();
$daniel->getName();