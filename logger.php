<?php

function logMessage($logLevel, $message){

	$filename = 'log-' . date("Y-m-d") . '.log' ;

	$handle = fopen($filename, 'a');


	$date = date("Y-m-d,h:m:s");


    fwrite($handle, $date . ' ' . $logLevel . ' ' . $message . PHP_EOL);


    fclose($handle);
	
}



function logInfo($logLevel){

	return logMessage("INFO", $logLevel);

}

function logError($message){

	return logMessage("ERROR", $message);

}

logInfo("This is an info message.");

logError("This is an info message.");