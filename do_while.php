<?php
//start at 0, end at 100, incrementing by 2
$a = 0;
do {
    echo "\$a is equal to {$a}\n" . PHP_EOL;
    $a = $a + 2;
} while ($a <= 100);

//start at 100, end at -10, decrementing by 5
$b = 100;
do {
    echo "\$b is equal to {$b}\n" . PHP_EOL;
    $b = $b -5;
} while ($b >= -10);

//start at 2, square c until up to 1000000.
$c = 2;
do {
    echo "\$c is equal to {$c}\n" . PHP_EOL;
    $c = $c*$c;
} while ($c < 1000000);