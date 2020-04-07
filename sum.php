<?php
function positive_sum($arr) {
    $ans = 0;
      for($i=0;$i<count($arr);$i++){
        ($arr[$i]>0) ? $ans+=$arr[$i] : $ans+=0; 
      }echo $ans;
    }
positive_sum([1, 2, 3, 4, 5])
?>