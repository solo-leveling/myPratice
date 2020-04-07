<?php
function primeFactors($n) {
    // echo (2**5)*(5)*(7**2)*(11);
    for ($i = 2; $i <= $n-1; $i++) {  
        if ($n % $i == 0) {  
        echo $i."    ";
        }  
  } 

}
primeFactors(86240);