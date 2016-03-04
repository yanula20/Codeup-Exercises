<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function isInArray($names, $compare){

	foreach ($names as $name) {

		if (array_search($name, $compare) !== false){

	   		echo $name . " is in both arrays.\n";

			echo "true" . PHP_EOL;

		} else {

			echo $name . " is not in the both array.\n";

			echo "false" . PHP_EOL;
		}

	}

}


echo isInArray($names,$compare) . PHP_EOL;

function compareArrays($array1,$array2){

	$count = 0;

	foreach($array1 as $key => $value){

		$result = array_search($value, $array2);

		if($result !== false){

			$count++;

		}

	} 
			return $count;
}  


echo compareArrays($names,$compare) . PHP_EOL;



$names2 = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];

$result = array_search('Bill Gates', $names);