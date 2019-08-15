<?php

/* INDEXD ARRAY */
/* Array using for loop
$customer_name = array("SALMAN", "FERdOUS", "TANJINA", "NUR NABI", "RAFEED");
//echo $customer_name[2];

for($i =0; $i<count($customer_name); $i++){

    echo $customer_name[$i]."<br>";
}
*/
/*Array using while loop
$customer_name = array("SALMAN", "FERdOUS", "TANJINA", "NUR NABI", "RAFEED");
$i =0;
while ($i<count($customer_name)){
    echo $customer_name[$i]."<br>";
    $i++;

}
*/

/*ASSOCIATIVE ARRAY */
$price = array("shirt"=>"400", "pant"=>"500", "tupi" =>"50");
//echo $price['shirt'];

foreach($price as $s =>$value){
    echo $s.':'.' '.$value."<br>";
}
?>