<?php
function odd_or_even(array $a){
  $sum=0;
  for($i =0; $i<count($a);$i++){
      $sum += $a[$i];
  }
  echo $sum % 2 == 0 ? "even" : "odd";
}
odd_or_even([2, 5, 34, 6]);