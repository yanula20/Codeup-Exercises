<?php

$nouns = ['bike', 'Jersey', 'watch', 'car', 'Doughnuts'];

$adjectives = ['Fuzzy', 'Hairy', 'Greasy', 'Soapy', 'Hunchback'];


 function getServerNounKey () {

    $key1 = Math.floor((Math.random() * 5) + 1);

    return $key1;
}


 function getServerAdjectiveKey () {
 

    $key2 = Math.floor((Math.random() * 5) + 1);

    return $key2;
}

$serverName =  $adjectives[getServerAdjectiveKey()] . ' ' . $nouns[getServerNounKey()];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
   
        <h1><?php echo $serverName; ?></h1>
   
</body>
</html>