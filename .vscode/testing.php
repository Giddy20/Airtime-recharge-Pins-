<?php

	$pin = "999999999999";
	
	for ($i=1; $i<=20; $i++) {
		$res = rand(100000000000, $pin);
		$loo = substr_replace( $res, '-', -4, 0 );
		echo "Pin: ". $loo ."<hr/>";
	}
?>
