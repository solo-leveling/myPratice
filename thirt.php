
<?php
function thirt($n) {
    $sum = 0;$temp = 0 ;$foo=[];$boo=[];
    $arr = [1,10,9,12,3,4];
    $arr1 =[1,10,9,12,3,4];
    $n = str_split($n);
    for($i = count($n)-1 ; $i>=0  ; $i--){
        $foo []= $n[$i];
    } 
    // print_r($foo);
    for($i = 0 ;$i < count($foo) ; $i++){
        $sum += $arr[$i]*$foo[$i];  
        // echo $arr[$i]*$n[$i]."  ";    
        if($arr[$i]==$arr[count($arr)-1]){
            for($j = 0 ; $j<count($arr1);$j++){
                $arr[count($arr)] = $arr1[$j];
            }    
        }
    }
    // echo $sum;
    $sum = str_split($sum);
    for($i = count($sum)-1 ; $i>=0  ; $i--){
        $boo []= $sum[$i];
    } 
    // print_r($sum);
    for($i=0; $i<count($boo) ; $i++){
        $temp += $arr[$i]*$boo[$i];
    }
    // echo 87%13;
    echo $temp;
    
}
thirt(8529);