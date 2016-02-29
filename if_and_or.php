<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
//true, both are true
if($x < $y && $x < $z){

	echo "{$x} < {$y} < {$z}\n";

}


// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
//true, 'or true', 5 < 10.

if(0 < $x || $x < 10){

	echo "0 is less than {$x} OR {$x} is less than 10";

}
// TODO:
// repeat the if statement for $y and $z.
//true, 0 < 5, 5 < 10 ($y)
//true, only one needs to be true, ($z), 0 < 10;


if(0 < $y || $y < 10){

	echo "0 is less than {$y} OR {$y} is less than 10";

}

if(0 < $z || $z < 10){

	echo "0 is less than {$z} OR {$z} is less than 10";

}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
// false, if one is false, all is false, 0 is not less than 0 ($x)
if(0 < $x && $x < 10){

	echo "0 is less than {$x} AND {$x} is less than 10.";

}

// TODO:
// repeat the if statement for $y and $z.
//true, both must be true, 0 < 5 and 5 < 10, ($y)
//false, if one false, both false, 0 is not less than 0,($z)


if(0 < $y && $y < 10){

	echo "0 is less than {$y} AND {$y} is less than 10.";

}

if(0 < $z && $z < 10){

	echo "0 is less than {$z} AND {$z} is less than 10.";

}
