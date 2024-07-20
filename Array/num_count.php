<?php

$arr = [1,23,2,3,1,23,98,9,4,7,11];
$len_count = count($arr);
$new_arr =[];

for ($i=0; $i <$len_count ; $i++) { 
    if(isset($new_arr[$arr[$i]])){
        $new_arr[$arr[$i]]++;
    }else{
        $new_arr[$arr[$i]]=1;
    }
}
echo "<pre>";print_r($new_arr);

// find the number whose value count is more than 1

$new_arr1=[];
foreach ($new_arr as $key => $value) {
    if ($value>1) {
        $new_arr1[$key]=$value;
    }
}
echo "<pre>";print_r($new_arr1);