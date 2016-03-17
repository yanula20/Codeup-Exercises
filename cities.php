<?php


if($argc !== 2){

   echo 'Usage: php contact-parser.php filename';
   exit(1);

}

$filename = $argv[1];

if(!file_exists($filename)){

	echo "File $filename does not exist.";
	exit(1);

} 


if(!is_readable($filename)) {

	echo "File $filename cannot be read";
	exit(1);

}

$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];


$handle = fopen($filename, 'a');


foreach ($newCities as $cityAndState) {

    fwrite($handle, $cityAndState . PHP_EOL);
}

print_r($newCities);

var_dump($newCities);

fclose($handle);









