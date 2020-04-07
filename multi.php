<?php
function solution($number){
    $arr=[];
    for($i = 1;$i<$number;$i++){
        $arr[]=$i;
    }
    $ans = 0 ;
    for($i=0;$i<count($arr);$i++){
    if($arr[$i]%3==0 || $arr[$i]%5==0){
        $ans+=$arr[$i];
    }
}echo $ans;
}
solution(10);
