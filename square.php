<?php

require_once 'rectangle.php';

class Square extends Rectangle{

		//overrides the parent class, could include ht. width, color
	public function __construct($side){

		//explains the overide, allows height and width below
		// $this->width = $side;
		// $this->height = $width;
		parent::__construct($side,$side);

	}

	
	//exists in Parent as well
	public function perimeter (){

		return Square::class . 2*$this->height + 2*$this->width;
	}

}

$square1 = new Square(777);

echo $square1->perimeter() . ' perimeter equals for $square1 calling Parent peri function' . PHP_EOL;;
echo $square1->area() . ' = area for $square1' . PHP_EOL;//methond of Rectangle class


$square2 = new Square(4);
echo $square2->perimeter() . ' perimeter equals for $square2 calling Parent function' . PHP_EOL;
echo  $square2->area() . ' = area for $square2' . PHP_EOL;//methond of Rectangle class


?>