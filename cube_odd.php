<?php
function cube_odd($a) {
    $sum="";
    for($i = 0 ; $i<count($a) ;$i++){
        if(!is_numeric($a[$i])){$sum = null;
        }    
    }
    if($sum !== null){
        $sum=0;
    for($i = 0 ; $i<count($a) ; $i++){       
        
        if($a[$i]%2 == 1 || $a[$i]%2 == -1){
            
            $sum += $a[$i]*$a[$i]*$a[$i];
        }
    }echo $sum;
}else{
    echo $sum;
}
}
  cube_odd(["a", 12, 9, "z", 42]);