<?php
function reverseSeq ($n) {
    $arr = [];
    for($i=$n;$i>0;$i--){
        
        array_push($arr,$i);            
    } print_r( $arr);
    //print_r(str_split($arr));
}
reverseSeq(5);