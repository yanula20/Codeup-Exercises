<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $element) {
    if (is_integer($element)) {
        echo "{$element} is an integer\n";
    } else if (is_float($element)) {
        echo "{$element} is a float.\n";
    } else if (is_bool($element)) {
        echo gettype($element) . " is this element's type.\n";
    } else if (is_array($element)) {
        var_dump($element);
    } else if (is_null($element)) {
        var_dump($element . " is a null value.");
    } else if (is_string($element)) {
        echo "{$element} is a string.\n";
	} else {

		echo $element;

	}
}


foreach ($things as $item){

	if(is_scalar($item)){

		echo "{$item} is a scalar.\n";
	}

}

foreach($things as $datum){

	if(is_scalar($datum)){

		echo "{$datum} is a first level element.\n";

	} else if(is_array($datum)){

		foreach($datum as $value){

			echo "    {$value} is a second level element.\n";
		}

	}

}