<?php
function balancedNum($num) {
    $first = substr($num,0,$num/2);
    $second = substr($num,$num/2,strlen($num));
    
    //echo "$first\n";
    echo strlen($num);
}
balancedNum(1024);