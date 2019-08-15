<?php

$str1 = "FIZZ";
$str2 = "BUZZ";
$str3 =$str1.$str2;

for($i =1; $i<101; $i++){
    if($i%15==0){
        echo $str3."<br>";
    }
   else if($i%3==0){
        echo $str1."<br>";
    }

    else if($i%5==0){
        echo $str2."<br>";
    }

    else {
        echo $i."<br>";
    }
}


?>