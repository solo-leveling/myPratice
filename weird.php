<?php

function toWeirdCase($string) {
    $ans = "";
    $s= ucwords(strtolower($string)); 
    $word = explode(" ",$s);
   
    for($i = 0 ;$i<count($word);$i++){
        
        for($j =0;$j<strlen($word[$i]);$j++){
            
            if($j%2==0){
               $ans .=strtoupper($word[$i][$j]);
            }else{
                $ans.=strtolower($word[$i][$j]);
            }
            
        }
        if($i != count($word)-1){
        $ans.=" ";
        }
    }echo $ans."\n";
}
  toWeirdCase('Hello world foo bar baz');