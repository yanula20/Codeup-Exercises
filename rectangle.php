<?php
class Rectangle
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    public function area()

    {
        //below is not advisable, below produces a string
        // return  ($this->height * $this->width) . PHP_EOL;
        return  $this->height * $this->width;
    }


    public function perimeter()
    {
        return  2*$this->height + 2*$this->width;

    }
}
?>