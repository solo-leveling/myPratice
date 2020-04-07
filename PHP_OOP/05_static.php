<?php
class Teacher{
    public static $count;
}
class Student{
    public $name,$id;
    public static $count;
    static function showCount(){
        //echo "Count is".$this->count;
        echo "Count is ".self::$count."\n";
        
    }
   
}
//$s1 = new Student();

//$s2 = new Student();
Teacher::$count=44;
Student::$count=54;
// echo  $s2->count;
// echo  $s1->count;
echo Student::$count."\n";
echo Teacher::$count."\n";
echo Student::showCount();