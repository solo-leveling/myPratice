<?php

class Person{
    private $id,$name;
    function __construct()
    {
        
    }
    function setID($id){
        $this->id = $id;
    }
    function setName($name){
        $this->name = $name;
    }
    function getID(){
        return $this->name;
    }
    function getName(){
        return $this->name;
    }
}
function getinfo(){
    $p1 = new Person();
    $p1->setID(101);
    $p1->setName("Ma Ma");

    $p2 = new Person();
    $p2->setID(102);
    $p2->setName("Mg Mg");

    $arr = [$p1,$p2];
    return $arr;
}
$x = getinfo();
print_r($x);
foreach($x as $key){
    echo $key->getID().",".$key->getName()."\n";
}
