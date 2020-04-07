<?php
function square_sum($numbers){
  $ans = 0;
    foreach($numbers as $val){
      $ans += $val*$val;
  }echo $ans;
}
square_sum([1,2]);