<?php

if($argc !== 2){

   echo 'Usage: php contact-parser.php filename';
   exit(1);

}

 $filename = $argv[1];//then php [0], $filename[1]

if(!file_exists($filename)){

	echo "File $filename does not exist.";
	exit(1);

} 


if(!is_readable($filename)) {

	echo "File $filename cannot be read";
	exit(1);

}

//where u put cursor? r (r only) = at beginning of file.
$handle = fopen($filename, 'r');

//fread provides a string!!
$contentString = fread($handle, filesize($filename));

//last line is an empty string. '/n'
$contentString = trim($contentString);

print_r($contentString);

fclose($handle);

//convert the single string into an array of strings
$arrayOfStrings = explode(PHP_EOL, $contentString);

$arrayOfStates = [];


foreach($arrayOfStrings as $string){

	$stateAssociativeArray = [];

	$stateInfo = explode(',', $string);

	$abbreviation = $stateInfo[0];

	$stateName = $stateInfo[1];

	$stateAssociativeArray[$abbreviation] = $stateName;

	$arrayOfStates[] = $stateAssociativeArray;

}

var_dump($arrayOfStates);














