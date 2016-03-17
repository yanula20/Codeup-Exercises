<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Maxie Planck, Quinn Mallory, Bruce Banner, Tony Stark, Physics Guru';



// TODO: Convert above string into an array
$physicistsArray = [];

$physicistsArray = explode(', ', $physicistsString);

var_dump($physicistsArray);

function humanizedList($array, $sort = false) {

	if ($sort === true) {

		sort($array);

		$lastPop = array_pop($array);
	 	
		$newList = implode(', ',$array);

		return $newList . ', and'  . ' ' . $lastPop . '.' . PHP_EOL;

	} else {

		$lastPop = array_pop($array);
	 	
		$newList = implode(', ',$array);

		return $newList . ', and'  . ' ' . $lastPop . '.' . PHP_EOL;
	}
	
 }

$famousFakePhysicists = humanizedList($physicistsArray) . PHP_EOL;

 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>

