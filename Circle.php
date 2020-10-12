<?php
//include ('Shape.php');

class Circle extends Shape implements Resizeable
{
    public $radius;
    public function resize($percent)
    {
        // TODO: Implement resize() method.
       return $this->radius = $this->radius * ((100 + $percent)/100);
    }

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

//    public function caculateArea()
//    {
//        return pi() * pow($this->radius,2);
//    }

//    public function caculatePerimeter()
//    {
//        return pi() * ($this->radius) * 2;
//    }
}
?>