<?php

$arr = [1,23,2,3,1,23,98,9,4,7,11];
$len_count = count($arr);

// for max count number
$max = $arr[0];

for ($i=0; $i < $len_count; $i++) { 
    if($max < $arr[$i]){
        $max = $arr[$i];
    }
}
echo $max;

// for min count number
$min = $arr[0];

for ($i=0; $i < $len_count; $i++) { 
    if($min > $arr[$i]){
        $min = $arr[$i];
    }
}
echo $min;