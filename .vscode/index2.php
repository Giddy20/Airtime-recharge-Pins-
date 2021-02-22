<?php

	$pin = 999999999999;
	
	for ($i=1; $i<=20; $i++) {
		$res = mt_rand(100000000, 99999900999);
		$loo = substr_replace( $res, '-', -4, 0 );
		echo "Pin: ". $loo ."<hr/>";
	}
?>