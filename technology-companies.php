<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

echo "Below is the array of companies untouched." . PHP_EOL;
echo print_r($companies) . PHP_EOL;

echo "Below is the array of companies sorted by key." . PHP_EOL;
echo ksort($companies) . PHP_EOL;
echo print_r($companies) . PHP_EOL;

echo "\n\n";

echo "Below is list of employees alphabetized within their respective companies.". PHP_EOL;

foreach ($companies as $company => $people){ //k:v, v is each companies list

    sort($people);
    print_r($people);

}

echo "Below is list of companies from largest to smallest.". PHP_EOL;

foreach ($companies as $company => $people){//$people is a group, list

   arsort($companies);
   print_r($companies);

}


foreach ($companies as $company => $people){

    if (array_search('Steve Jobs', $people) !== false){
    echo "Steve Jobs helped found $company.\n";
    break;

    }
}

foreach($companies as $companyName => $people){
    //$people is unsorted
    asort($people);
    //$people is sorted

    //$people is reassigned, overwrite
    $companies[$companyName] = $people;
}

print_r($companies);





$languages = ['html', 'css', 'mysql', 'js'];

foreach($languages as $key => $language){

    $languages[$key] = strtoupper($language);
}

var_dump($languages);




$names = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];

$query = 'Tim Berners-Lee';

$result = array_search($query, $names);//returns index

if ($result !== false) {

    echo $names[$result] . PHP_EOL;
}