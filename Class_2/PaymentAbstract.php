<?php



 interface PaymentAbstract{


   function senOtp($email = null, $number=null);
   function sucess($userName);
   function SendInvoice($email);



}