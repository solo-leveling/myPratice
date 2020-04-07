<?php
function find($integers) {
    $even=0;$odd=0;
for($i=0;$i<count($integers);$i++){
        if($integers[$i]%2==0){
            $even++;
            $foreven = $integers[$i];
        }
        else{
            $odd++;
            $forodd = $integers[$i];
        }
    }
    echo $even > $odd ? $forodd : $foreven;
}
find([2,2,2,2,2,-21]);