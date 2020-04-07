<?php
function findIt(array $seq) 
{
  $arr =array_count_values($seq);
  $keys = array_keys($arr);
  $values = array_values($arr);
  //print_r($keys);print_r($values);
  for($i = 0 ; $i <count($arr); $i ++){     
      if($values[$i]%2==1){
        print_r($keys[$i]);
      }
  }

}
findIt([1,1,1,1,1,1,10,1,1,1,1]);
    




  



 
//   result = { };var ans = "";
//     for(var i = 0; i < a.length; ++i) {
//         if(!result[a[i]])
//             result[a[i]] = 0;
//         ++result[a[i]];
//         }console.log(ans)