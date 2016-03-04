<?php



if($argc !== 2){

   echo 'Usage: php contact-parser.php filename';
   exit(1);

}

 $filename = $argv[1];//php [0], txt [1],  

if(!file_exists($filename)){

	echo "File $filename does not exist.";
	exit(1);

} 


if(!is_readable($filename)) {

	echo "File $filename cannot be read";
	exit(1);

}

function logMessage($logLevel, $message)
{
    date_default_timezone_set('GMT');

	echo date("Y-m-d,h:m:s");
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
