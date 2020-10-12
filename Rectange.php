<?php
//
//include ('Shape.php');
class Rectange extends Shape
{
    public  $width;
    public $height;
    public function __construct($name,$height,$width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
       return $this->height * $this->width;
    }

    public function caculatePerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}
?>