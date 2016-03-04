<?php

// TODO: Create your inspect() function here
function inspect($parameter){

	$inpectionResult = gettype($parameter);

	if ($inpectionResult === "array" && empty($parameter)){

		var_dump($parameter);

		echo "This parameter is an empty array. " . PHP_EOL;

	}else if($inpectionResult === "array"){

		var_dump($parameter);

		echo "This parameter is an array. " . PHP_EOL;

	}else if ($inpectionResult === "NULL"){

		var_dump($parameter);

		echo "This parameter is a NULL. " . PHP_EOL;


	}else if ($inpectionResult === "boolean") {

		if($parameter === true){

			"This parameter is a boolean and TRUE. " . PHP_EOL;

		}else{

			"This parameter is a boolean and FALSE." . PHP_EOL;


		}

	}

	else {

		echo "This parameter is a {$inpectionResult}" . PHP_EOL;

	}

}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;


echo inspect($string1) . PHP_EOL;
echo inspect($string2) . PHP_EOL;
echo inspect($array1) . PHP_EOL;
echo inspect($array2) . PHP_EOL;
echo inspect($bool1) . PHP_EOL;
echo inspect($bool2) . PHP_EOL;
echo inspect($num1) . PHP_EOL;
echo inspect($num2) . PHP_EOL;
echo inspect($num3) . PHP_EOL;
echo inspect($num4) . PHP_EOL;
echo inspect($null) . PHP_EOL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo  inspect($num1) . PHP_EOL;

echo "\n\n";

echo 'Inspecting $num2:' . PHP_EOL;
echo  inspect($num2) . PHP_EOL;

echo "\n\n";


echo 'Inspecting $num3:' . PHP_EOL;
echo  inspect($num3) . PHP_EOL;



echo "\n\n";

echo 'Inspecting $num4:' . PHP_EOL;
echo  inspect($num4) . PHP_EOL;


echo "\n\n";

echo 'Inspecting $null:' . PHP_EOL;
echo  inspect($null) . PHP_EOL;


echo "\n\n";

echo 'Inspecting $bool1' . PHP_EOL;
echo  inspect($bool1) . PHP_EOL;

echo "\n\n";

echo 'Inspecting $bool2' . PHP_EOL;
echo  inspect($bool2) . PHP_EOL;

echo "\n\n";

echo 'Inspecting $string1' . PHP_EOL;
echo  inspect($string1) . PHP_EOL;

echo "\n\n";

echo 'Inspecting $string2' . PHP_EOL;
echo  inspect($string2) . PHP_EOL;

echo "\n\n";

echo 'Inspecting $array1' . PHP_EOL;
echo  inspect($array1) . PHP_EOL;

echo "\n\n";

echo 'Inspecting $array2' . PHP_EOL;
echo  inspect($array2) . PHP_EOL;
