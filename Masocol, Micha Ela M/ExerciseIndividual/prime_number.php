<?php 
	function isPrime($num) {
		if ($num <=1) return false;
		
		for ($i = 2; $i < sqrt($num); $i++) {
			if ($num % $i == 0) return false;
		}
		
		return true;
	}

	$number = 2;
	if (isPrime($number)) {
		echo "$number i a prime number";
	} else {
		echo "$number is not a prime number";
	}
?>