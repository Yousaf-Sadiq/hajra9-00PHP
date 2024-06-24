<?php 
require_once "./class4.php";

use class4\ADD as ADD;



$obj = new ADD;

echo $obj->calculate();
echo "<br>";
echo $obj->calculate2();

?>