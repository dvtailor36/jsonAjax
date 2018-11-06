<?php

if(isset($_POST['action']))
{
	function sanitizechar($A)
	{
		$A=preg_replace("/[^A-Za-z0-9]/", "",$A);
		return $A;
	}

	function sanitizenum($A)
	{
		$A=preg_replace("/[^0-9.]/", "",$A);
		return $A;
	}

	if(isset($_POST['amount'])){ $amount=sanitizenum($_POST['amount']);}
	if(isset($_POST['currency1'])){ $currency1=sanitizechar($_POST['currency1']); }
	if(isset($_POST['currency2'])){ $currency2=sanitizechar($_POST['currency2']); }
	if(isset($_POST['price'])){ $price=sanitizenum($_POST['price']); }

	$data = Array();
	$data[]=$amount; 
	$data[]=$currency1; 
	$data[]=$currency2; 
	$data[]=$price;

	$return_data=json_encode($data); 

	echo $return_data;
}
	

?>