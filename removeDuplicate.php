<?php
function removeDuplicateWords($s) {
$arr =[];
$s = explode(" ",$s);
for($i = 0 ; $i< count($s) ; $i++){
    $arr []= $s[$i];
}
print_r($arr);

}
  removeDuplicateWords('alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta');