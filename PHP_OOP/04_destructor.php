<?php

class Person{
    private $id;
    private $name;
    //obj create
    function __construct($name,$id)
    {
        $this->name = $name;
        $this->id = $id;
        echo "created\n";
    }
    function setID($id){
        $this->id = $id;
    }
    function setName($name){
        $this->name = $name;
    }
    function getID(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    //obj destroy
    function __destruct()
    {
        echo "destroyed\n";
    }
}
function getinfo(){
    echo "hi\n";
    $p1 = new Person("Ma Ma",101);
    // $p1->setID(101);
    // $p1->setName("Ma Ma");

    $p2 = new Person("Mg Mg",102);
    // $p2->setID(102);
    // $p2->setName("Mg Mg");

    $arr = [$p1,$p2];
    return $arr;
}
 $x = getinfo();
foreach($x as $key){
    echo $key->getID().",".$key->getName()."\n";
}
