<?php
//datatype of php
///string


$str = "hello world";
echo var_dump($str);
echo "<br>";
echo is_string($str);

echo "<br>";
///integer


$int  = 1234;
echo var_dump($int);
echo "<br>";
echo is_int($int);
echo "<br>";

//float

$float = 12.34;
echo var_dump($float);
echo "<br>";
echo is_float($float);
echo "<br>";

//boolean

$name = false;

if($name){
    echo "it have true values";
}else{
    echo "it have false values";
}
echo "<br>";

//array 

$arr = [1,2,3,4,5,6,7,8,9];
print_r($arr);


//object




?>