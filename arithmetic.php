<?php

$a = 20;

$b = 100;

function add($a, $b){

	$a = "hi";

	$b = 125;

	echo "{$a} inside with func parameters.\n";

	echo "{$b} inside with func parameters.\n";

	if(is_int($a) == true && is_int($b) == true) {

		return $a + $b;

	} else {

		throwErrorMessage($a,$b);
	}

}

echo "{$a} outside with func parameters ONE.\n";

echo "{$b} outside with func parameters ONE.\n";

echo add($a,$b) . ' func add() called below, 5 and 3 are overwritten by 25 and 125' . PHP_EOL;

echo add (6,10) . ' func add() called below, 6 and 10, are overwritten by 25 and 125' . PHP_EOL;







function subtract($a, $b){

	if(is_int($a) == true && is_int($b) == true) {

		return $a - $b;

	} else {

		throwErrorMessage($a,$b);
	}

   
}

echo subtract("5",$b) . ' func subtract() called below with params TWO' . PHP_EOL;








function multiply($a, $b){

	if(is_int($a) == true && is_int($b) == true) {

		return $a * $b;

	} else {

		throwErrorMessage($a,$b);
	}
    
}


echo multiply($a,'555u') . ' func miltiply() called below with params THREE' . PHP_EOL;





function divide($a, $b){

	if(is_int($a) == true && is_int($b) == true && $b !== 0 ) {

		return $a / $b;

	} else if ((int)$b === 0) {

		echo "Error!: Your value, {$a}, cannot be divided by {$b}." . PHP_EOL;

	} 
    
}

echo divide(10,0) . ' func divide() called below with params for error validation 1.' . PHP_EOL;
echo divide(5,0) . ' func divide() called below with params for error validation 2.' . PHP_EOL;
echo divide(15,0) . ' func divide() called below with params for error validation 3.' . PHP_EOL;
echo divide(7,0) . ' func divide() called below with params for error validation 4.' . PHP_EOL;
echo divide(9,0) . ' func divide() called below with params for error validation 5.' . PHP_EOL;
echo divide(1,0) . ' func divide() called below with params for error validation 6.' . PHP_EOL;





function modulus(&$a,&$b){

	return $a%$b;
}

$a=33;

$b=3;

echo "{$a} and $b} are values for modulus.\n";







echo modulus($a,$b) . ' func modulus() called below w/params and by ref' . PHP_EOL;

$a=100;

$b=3;

echo modulus($a,$b) . ' func modulus() called below w/params and by ref PART 2' . PHP_EOL;








function addition($a, $b =10) {

	return $a + $b;

}

echo addition(3,4) . ' is compare func() result with 2 args and default, defaults are ignored!' . PHP_EOL;

echo addition(4) . ' is compare func() result with 1 argument' . PHP_EOL;

echo addition("hi",4) . PHP_EOL;
//string,boolean, int/"hi" converted to 0 here.


function minus($a = 20, $b =10) {

	return (int)$a - (int)$b;

}

echo minus(40,5) . ' defaults with minus()' . PHP_EOL;//20 and 10 are overwritten;
echo minus() . ' defaults with minus()' . PHP_EOL;;// result = 20 -10
echo minus(40) . ' defaults with minus()' . PHP_EOL;;//result = 40 -10;

//must supply at least 4 arguments. less than four throws an error.
function superSubtraction($r, $s, $t, $u, $v = 2, $w = 1) {

	return (int)$r - (int)$s - (int)$t - (int)$u - (int)$v - (int)$w;

}

echo "\n\n";

echo superSubtraction(200,7,6,5) . '   super subtraction function' . PHP_EOL;


function throwErrorMessage($a,$b){

	if(!is_numeric($a) || !is_numeric($b)){

		echo "Invalid operation. THROWBACK THROWBACK error func(). Please recheck your arguments!." . PHP_EOL;
	}
}

