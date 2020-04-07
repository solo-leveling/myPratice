<?php

class Person{
    public $id,$name;
    // function greet(){
    //      echo "Hello ,".$this->name.".Your ID is ".$this->id."\n";
    // }
    // function getter(){
    //     return $this->name;
    //     return $this->id;
    // }
    // function setter($name,$id){
    //     $this->name = $name;
    //     $this->id = $id;
    // }
    function __construct()
    {
     
    }
}
function getinfo(){
    $p1 = new Person();
    $p1->id = 101;
    $p1->name ="Ma Ma";

    $p2 = new Person();
    $p2->id = 102;
    $p2->name = "Mg Mg";

    $arr = [$p1,$p2];
    return $arr;
}
$x = getinfo();
print_r($x);
foreach($x as $key){
    echo $key->id.",".$key->name."\n";
}

// $p1 = new Person();
// $p1->name = "Mg Mg";
// $p1->id =122;
// $p1->greet();
// $p1->setter("Hein",20);
// $p1->greet();

// $p2 = new Person();
// $p2->name = "Ma Ma";
// $p2->id =12;
// $p2->greet();



// if($p1 == $p2){
//     echo "same";
// }else{
//     echo "diff";
// }