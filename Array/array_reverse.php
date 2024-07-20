<?php

$arr = [1,23,2,3,1,23,98,9,4,7,11];
$array_length = count($arr);


// Using while loop //
$start = 0;
$end = $array_length - 1;

while ($start < $end) {
    $temp = $arr[$start];
    $arr[$start] = $arr[$end];
    $arr[$end] = $temp;
    $start++;
    $end--;
}
print_r($arr);

// Using  forloop //
$revArry=[];
for ($i=0; $i < $array_length; $i++) { 
    $revArry[] = $arr[$array_length-$i-1 ];
}
print_r($revArry);