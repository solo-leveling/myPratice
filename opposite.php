<?php
function opposite($n) {
  echo $n>0 ? ($n*-2)+$n : $n-($n*2);
}  
opposite(14);