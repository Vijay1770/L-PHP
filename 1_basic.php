<?php
// echo "This is my first php program";

//This is a way ot declare variables in php ...we dont need to declare its type like python...
$str="THis is string";
$num=5;
$float_value=5.50;

echo "<h1>". $str . "<h1>";
echo "<h2>" . $num . "<h2>";
echo "<h3>" . $float_value . "<h3>";

//Decration of "Array" ...

$arr=array("a","ab","abc","abcd" );
$arr2=array(1,2,3,4,5);
echo var_dump($arr); //for dump all the info about the variable...
echo var_export($arr);//gives output only the position and the data...
echo "<br>";
echo var_dump($arr2);
echo var_export($arr2);
echo "<br>";

//constant ...which is used to fix the data for liftime of the program...
define('owner_name','Viay');
define("arr3",[1,2,3]);
const owner_age=22;
echo owner_name;
echo owner_age;
print_r(arr3);

?>

