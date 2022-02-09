<?php
//while loop

$table =2;
$i=1;
while($i<=10){
    
    echo "$table*$i=".$table*$i;
    echo "<br>";
    $i++;
    
    
}

echo "<br>";
echo "<br>";


$table =2;
$i=1;
do{
echo "$table*$i=".$table*$i;
$i++;
    echo "<br>";
    
}
while($i<=10);
echo "<br>";
echo "<br>";

for ($j=1; $j <=10; $j++) { 
    echo "$table*$j=".$table*$j;
    echo "<br>";
}
echo "<br>";

$arr = [1,2,3,4,5,6,7,8,9];
$total = 0;
foreach ($arr as $key ) {
    $total = $total +$key;

}
echo $total;
echo "<br>";
echo "<br>";


for ($i=0; $i <=10 ; $i++) { 
    if($i==4){
        break;
    }
    echo "hello world";
    echo "<br>";

}
$n = 1;
for ($i=0; $i <5 ; $i++) { 
    if($i==4){
        echo "hello world $n++";
        continue;
       
    }
}




?>