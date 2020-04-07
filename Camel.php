<?php

function toCamelCase($str){
    for($i = 0 ; $i<strlen($str);$i++){
        if($str[$i] == "-"){
            $ans = str_replace("-"," ",$str);
        }else if($str[$i] == "_"){
            $ans = str_replace("_"," ",$str);
        }
    }       
    if($ans[0]!=lcfirst($ans[0])){
    $result = ucwords($ans);
    $ans = str_replace(" ","",$result);
    echo $ans;
    }else if($ans[0]==lcfirst($ans[0])){
    $result = ucwords($ans);
    $ans = str_replace(" ","",$result);
    echo lcfirst($ans);
    }    
}

toCamelCase("the-Stealth-Warrior");