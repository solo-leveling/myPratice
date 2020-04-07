<?php

function duplicateCount($text) {
    $text = strtolower($text);
$str="";$count=0;$temp="";
for($i = 0 ; $i<strlen($text);$i++){
if(strpos($str,$text[$i]) === false){ 
    $str.=$text[$i];
}else{   
    if(strpos($temp,$text[$i])===false){
        $temp.=$text[$i];
        $count++;
    }
}
}echo $count;   
}
  duplicateCount('aabbbcde');