<?php

$string = "PHP IS COOL";
$str_count = strlen($string);
$rev_str="";
for ($i=$str_count-1; $i >= 0; $i--) { 
    $rev_str.= $string[$i];
}
echo $rev_str;