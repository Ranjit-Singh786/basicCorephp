<?php

function primenum($num){
        
        $flag =0;
        for ($i=2; $i <$num ; $i++) { 
            if($num%$i==0){
            $flag=1;
            break;
            }
}
        if($flag == 1){
            echo 'not prime num';
        }else{
            echo 'prime num';
        }

    }
    primenum(5);
?>