<?php
//include ('Rectange.php');

class Square extends Rectange
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width,$width);
    }
}
?>