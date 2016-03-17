<?php

if($argc !== 2){

   echo 'Usage: php contact-parser.php filename';
   exit(1);

}

 $filename = $argv[1];//txt [1], then php [0]

if(!file_exists($filename)){

	echo "File $filename does not exist.";
	exit(1);

} 


if(!is_readable($filename)) {

	echo "File $filename cannot be read";
	exit(1);

}


$handle = fopen($filename, 'r');
var_dump($handle);



function stringInsert($str,$insertstr,$pos)
{
    $str = substr($str, 0, $pos) . $insertstr . substr($str, $pos);
    return $str;
}  


function parseContacts($filename){ 

    $contacts = array();

    $handle = fopen($filename, 'r');

	$contents = fread($handle, filesize($filename));

	$contentsArray = explode("\n", $contents);
	
	array_pop($contentsArray);

	foreach($contentsArray as $data => $value){//arr,index,str

		$explodedContents = explode('|', $value);

		$hyphenOne = stringInsert($explodedContents[1],"-",3);

		$finalNumber = stringInsert($hyphenOne,"-",7);

		$newArray = ['name'   => $explodedContents[0],
					 'number' => $finalNumber];
		
		array_push($contacts,$newArray);

	}
	
	return $contacts;

}

var_dump(parseContacts('contacts.txt'));
