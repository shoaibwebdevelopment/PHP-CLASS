<?php
$search_value = 11;
$list_of_values = array(23, 43, 13, 11, 4, 11);
$length = count($list_of_values);
$result = linear_search($search_value, $list_of_values, $length);

if ($result == -1){
    echo "NOT FOUND";
}
else {
    echo "$search_value is found and it's position is ="." ".$result;
}



function linear_search($s, $array, $l){
    for($i =0; $i<$l; $i++){
        if($s ==$array[$i]){
            return $i;
        }
    }
    return -1;
}

?>