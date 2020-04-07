<?php
function longestConsec($strarr, $k) {
if(count($strarr)==0 || $k>count($strarr) || $k<=0){
        echo "";
}else{
$arrNum = [];$num=0;$str="";$count = 0;$ansNum=0;$ansStr="";
for($i = 0 ; $i<count($strarr) ; $i++){
     //$arrNum[]= strlen($strarr[$i]);
     array_push($arrNum,strlen($strarr[$i]));
}
if($k != 1){
for($j = 0 ; $j<count($strarr);$j++){    
    $num += $arrNum[$j];
    $str .= $strarr[$j];
    $count++;
    if($count==$k){       
        $ansStr = $str; 
        if($num>$ansNum)$ans = $ansStr;              
        $str = "";
        $ansNum = $num;     
        $num = 0;   
        
        $count=0;
        $j--;    
    }        
}
echo $ans;
}else{
    $ansNum=0;$ansStr="";$ans="";
    for($i = 0;$i<count($strarr);$i++){
        $num = $arrNum[$i];
        $str = $strarr[$i];
        if($num>$ansNum)$ans = $str;
        $str="";$ansNum=$num;
        $num=0;
    }echo $ans;
}
}
}
longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1);
