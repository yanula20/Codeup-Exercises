<?php

for($i = 0; $i <= 100; $i++){

	if($i%2 == 0){

		continue;
	}
	 	echo "{$i} is an odd number.\n";
}

for($i = 0; $i <= 100; $i++){

	if($i == 10){

		break;
	}
	 	echo "{$i} is waiting for number 10.\n";
}
