<?php
function getCount($str) {
  $vowelsCount = 0;
  
for($i=0;$i<strlen($str);$i++){
  if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'){
      $vowelsCount++;
  }
}echo $vowelsCount;
}
getCount("abracadabra");