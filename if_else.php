<?php

$a = 5;
$b = 10;
$c = '10';

// TODO: Shorten these two if statements to a single if/else
if ($a < $b) {
    echo "$a is less than $b\n";
}

echo ($a < $b)? "$a is less than $b\n" : "$a is not less than $b\n" . PHP_EOL;

if ($a >= $b) {
    echo "$a is greater than or equal to $b\n";
}

echo ($a >= $b)? "$a is greater than or equal to $b\n" : "$a is not greater than or equal to $b\n" . PHP_EOL;

// TODO: Shorten these two if statements to a single if/else

echo ($b < $c)? "$b is less than $c\n" : "$b is not less than $c\n" . PHP_EOL;

if ($b < $c) {
    echo "$b is less than $c\n";
}

echo ($b >= $c)? "$b is > than or = $c\n" : "$b is not > or = to $c\n" . PHP_EOL;


if ($b >= $c) {
    echo "$b is greater than or equal to $c\n";
}

// TODO:
// combine the next 3 conditionals into one
// if/elseif/else block that checks in order for:
// identical, equal, not equal/identical
if ($b === $c) {
    echo "$b is identical to $c\n";
} else if ($b == $c) {
    echo "$b is equal to $c\n";
} else ($b != $c) {
    echo "$b is not equal to $c\n";
}

