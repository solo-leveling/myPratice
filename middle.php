<?php
function getMiddle($text) {
  $length =  strlen($text);
if($length%2==0){    
    $half = floor($length/2)-1;
    echo substr($text,$half,2);
}else{
    $half = ceil($length/2)-1;
    echo substr($text,$half,1);
}
}


getMiddle('4eNee8o');