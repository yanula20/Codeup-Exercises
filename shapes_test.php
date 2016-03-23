<?php

require_once 'rectangle.php';

$rectangle1 = new Rectangle(5,4);
echo '$rectangle1 area ' . $rectangle1->area() . PHP_EOL;
echo '$rectangle1 permimeter ' . "{$rectangle1->perimeter()}\n" . PHP_EOL;



$rectangle2 = new Rectangle(100,4);
echo '$rectangle2 area ' . $rectangle2->area() . PHP_EOL;
echo '$rectangle2 perimeter ' . "{$rectangle2->perimeter()}\n" . PHP_EOL;



$rectangle3 = new Rectangle(50,2);
echo '$rectangle3 area ' .$rectangle3->area() . PHP_EOL;
echo '$rectangle3 perimeter ' . "{$rectangle3->perimeter()}\n" . PHP_EOL;


function showShapesAsJson(Rectangle $rectangle){

    return json_encode([
        'area' => $rectangle->area(),
        'perimeter' => $rectangle->perimeter()

    ]);
}

echo showShapesAsJson($rectangle1), "\n";
echo showShapesAsJson($rectangle2), "\n";

?>