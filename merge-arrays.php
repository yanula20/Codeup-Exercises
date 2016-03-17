<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($array1,$array2){

	$array3 = [];

	foreach($array1 as $key => $value){

			if ($array2[$key] !== $array1[$key]){

				array_push($array3,$array1[$key]);
				array_push($array3,$array2[$key]);

			} else {

				array_push($array3,$value);
			}

	} //end foreach

	return var_dump($array3);

} //end combine


echo combine_arrays($names,$compare) . PHP_EOL;


function merge_arrays($array1,$array2){

	$array3 = [];

	foreach($array1 as $key => $value){

			if ($array2[$key] !== $array1[$key]){

				array_push($array3,$array1[$key]);
				array_push($array3,$array2[$key]);

			} else {

				array_push($array3,$value);
			}

	} //end foreach

	return var_dump($array3);

} //end merge


echo merge_arrays($names,$compare) . PHP_EOL;