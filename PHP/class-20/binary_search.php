<?php
$search = 7;
$list_of_values = array(12, 5, 17, 1, 32, 7);
sort($list_of_values);
$l = 0;
$r = count($list_of_values)-1;

$result = binary_search($search, $list_of_values, $l, $r);
 if($result== -1){

    echo "Not Found";
 }

 else {

    echo "The postion of search value is:"." ".$result;
 }
 function binary_search($search, $arr, $l, $r){

    while($l<=$r){
        $mid = floor(($l + $r)/2);
        if($search==$arr[$mid]){
            return $mid;
        }
        else if ($search>$arr[$mid]){
            $l = $mid +1;
        }

        else {
            $r = $mid -1;
        }
    }
    return -1;
 }




?>