<?php
function accum($s) {
    $s = strtolower($s);
    $arr = str_split($s);$ans = "";$temp="";$anss="";
    $count = count($arr);
    for($i=0;$i<$count;$i++){
        for($j=0;$j<=$i;$j++){
               $temp.=$s[$i];
              $ans.=$temp;
              $temp="";
             if($j==$i && $j !== $count-1){
                  $ans.="-";
                  
             }
        }//
    }
    $ans = str_replace("-"," ",$ans);
    $result = ucwords($ans);
    $result = str_replace(" ","-",$result);
    echo $result;
}
accum("RqaEzty");