<?php

do {

	fwrite(STDOUT, "First, pick a start number. Second, pick an end number. Last, pick an increment.\n ");

	$a = (int)trim(fgets(STDIN));


	$b = (int)trim(fgets(STDIN));


	$increment = (int)trim(fgets(STDIN));


	if ( $a < $b  && $increment !== 0 ){

		fwrite(STDOUT, "Your start number is {$a}, your end number is {$b}, your increment is {$increment}.\n");

	} else if ( $a > $b  && $increment !== 0 ) {

		fwrite(STDOUT, "Your start number is {$b}, your end number is {$a}, and your increment is {$increment}.\n");

	} else if ( $a < $b  && $increment === 0) {

		$increment = 1;

		fwrite(STDOUT, "Your start number is {$a}, your end number is {$b}, your increment is {$increment}.\n");
		
	} else if ($a > $b  && $increment === 0 ) {

		$increment = 1;

		fwrite(STDOUT, "Your start number is {$b}, your end number is {$a}, and your increment is {$increment}.\n");
		
	} else if ($a === $b) {

		fwrite(STDOUT, "{$a} and {$b} are equal! Please, try again.\n ");

	} else if ($a === 0 && $b === 0 && $increment === 0) { //transitive prop

		fwrite(STDOUT, "Invalid values. Please, try again.\n ");

	}

} while( !is_numeric ($a) || !is_numeric ($b) || !is_numeric ($increment) );


if ($a < $b) {

	$i = $a;

	for ($i = $a; $i <= $b; ) {

		fwrite(STDOUT,"{$i}\n");

		$i += $increment;

	}

} else {

	$i = $b;

	for ($i = $b; $i <= $a; ) {

		fwrite(STDOUT,"{$i}\n");

		$i += $increment;

	}

}



