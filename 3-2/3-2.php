<?php
$fruits =  ["りんご" =>"100", "みかん" => "30", "もも" => "300"]; 
$count =  [3,5,10];

function getTotal($value, $count) {
    return $value * $count;  
}
$i=0;
foreach ($fruits as $key => $value) {
    echo $key."は".getTotal($value, $count[$i])."円です。<br>";
    $i++;
}  
?>