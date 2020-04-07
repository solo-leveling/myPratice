<?php

function strong($n) {
   $arr = str_split($n);$temp =1;
   for($i =0 ;$i<count($arr);$i++){
       if($arr[$i]>1){
            for($j = $arr[$i];$j>0;$j--){
                $temp *= $j;
                echo $temp."\n";
                if($j==1){
                    
                    $ans += $temp ;
                    $temp =1;
                }
            }
       }else{
           $ans++;
       }
   }echo $ans==$n ? "STRONG!!!!" : "Not Strong !!";
}

strong(145);




//   https://www.codewars.com/kata/5a4d303f880385399b000001/train/php
//str split multi 
//