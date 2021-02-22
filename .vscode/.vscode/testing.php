<?php

	$pin = "1170727537986887";
	
	for ($i=1; $i<=20; $i++) {
		$res = rand(0, $pin);
		$loo = substr_replace( $res, '-', -4, 0 );
		echo "Pin: ". $loo ."<hr/>";
	}
?>
