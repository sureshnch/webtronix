<?php

	$price=$_REQUEST['price'];
	$payment=$_REQUEST['payment'];
	$interest=$_REQUEST['interest'];
	$months=$_REQUEST['months'];
	
	//Function Calculator
	function calculator($price, $payment, $interest, $months){
		//total_defer
		$total_defer= $price - $payment;
		//interest_rate
		$interest_rate=$interest/100;	
		$rate=1+$interest_rate;
		//exponents
		$exponents= pow($rate,$months);
		//total Quote
		$quote=$total_defer*(($interest_rate*$exponents)/($exponents-1));
		//Result
		echo "Monthly: $ ".$quote_format = number_format($quote);
	}

	if (($interest == "Interest Rate") or ($months == "Months")) {
		echo "Select an interest and a deadline.";
	}else{		
		//Runt Function
		calculator($price, $payment, $interest, $months);
	}

?>
