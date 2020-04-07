<?php

function remove_char(string $s){
  $last= substr($s,2,-1);
   //$first= substr($last,1);
   echo $last;
}
remove_char('eloquent');