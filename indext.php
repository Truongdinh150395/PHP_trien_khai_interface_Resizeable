<?php
include_once ("Resizeable.php");
include_once ('Shape.php');
include_once ('Rectange.php');
include_once ('Square.php');

include_once ('Circle.php');
include_once ('Cylinder.php');
//$HCN = new Rectange("HINHCHUNHAT",3,4);
//echo "Dien tich HCN la: ". $HCN->calculateArea() . " Chu vi HCN la: " .$HCN->caculatePerimeter();
//echo "<br>";
//
//$HV = new Square("HINhVUong",4,4);
//echo "Dien tich HV la: " .$HV->calculateArea() . " Chu vi HV la: " .$HV->caculatePerimeter();
//echo "<br>";

$HT = new Circle("HINHTRON", 2);
//echo "dien tich hinh tron la " . $HT->caculateArea() . " Chu vi la : " .$HT->caculatePerimeter();
 echo $HT->resize(100);

?>