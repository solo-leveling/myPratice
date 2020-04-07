<?php

function persistence($num) {
    $arr = str_split($num);
    $length = strlen($num);
    $temp =1 ;
    for($i=0;$i<$length;$i++){
        $temp *= $arr[$i];
        if($i == $length-1 && strlen($temp) >1){
            $arr=[];
            $temp = str_split($temp);
            $arr[]=$temp;
            print_r($arr); 
        }
    }
}
  persistence(39);