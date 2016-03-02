<?php

for($i = 0; $i <= 100; $i++){

	if($i%3 == 0 && $i%5 !== 0){

		echo "Fizz\n";

	} else if ($i%5 == 0 && $i%3 !== 0){

		echo "Buzz\n";

	} else if($i%5 == 0 && $i%3 == 0){

		echo "FizzBuzzzzzzer\n";

	} else {

		echo "$i\n";
	}
}