<?php
$var=7;
//IF and ELSE statement in php ...
if($var%2==0 && $var%3==0){
echo "divided by 2 and 3";
}
elseif($var%2==0)
{
    echo "divided by only 2";
}
elseif($var%3==0){
    echo "divided by only 3";
}
else{
    echo "$var is not divided by 2 or 3";
}

echo "<br>";

//Switch Statements...
$level=3;
switch($level){
    case 1:
        echo "at the level of 1";
        break;
        case 2:
        echo "at the level of 2";
        break;
        case 3:
        echo "at the level of 3";
        break;
        case 4:
        echo "at the level of 4";
        break;
        default:
        echo "Invalid input";
}

echo "<br>";

//LOOPS ...
//1.While_Loop...
$num=2;
while($num<=10){
    echo "$num ";
    // print_r($num);
    $num++;
}

//2.Do_While Loop...
$num2=2;
do{
    echo "$num2  ";
    $num2++;
}while($num2 <=10);

//3.For_Loop...
for($num3=0;$num3<=10;$num3++){
    echo "$num3   ";
}

//FUNCTION OR METHODS...
function fun(){
   echo "This is function fun()...";
}
fun();
?>