<?php
//include ('Circle.php');

class Cylinder extends Circle
{
    public $height;
  public function __construct($name, $radius,$height)
  {
      parent::__construct($name, $radius);
      $this->height = $height;
  }

    public function caculateArea()
    {
        //dien tich hinh tru la dien tich day + dien tich xung quanh(chu vi * chieu cao)
        return parent::caculateArea() * 2 + parent::caculatePerimeter() * $this->height;
  }

    public function caculateVolume()
    {
        return parent::caculateArea() * $this->height;
    }

}
?>