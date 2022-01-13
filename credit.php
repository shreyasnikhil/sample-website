<?php

$submitbutton= $_POST['submitbutton'];

$number= $_POST['cardnumber'];

function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );

    if (preg_match($cardtype['visa'],$number))
    {
	$type= "visa";
        return true;
	
    }
    else if (preg_match($cardtype['mastercard'],$number))
    {
	$type= "mastercard";
        return true;
    }
    else if (preg_match($cardtype['amex'],$number))
    {
	$type= "amex";
        return true;
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
        return true;
    }
    else
    {
        return false;
    } 
 }

if(validatecard($number)==true)
   {
      header('Location: http://127.0.0.1:5500/Function%20Hall%20Booking%20System/ThankYou.html');
   }


?>