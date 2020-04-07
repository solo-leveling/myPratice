<?php
interface startAble{
    public function start();
}
interface change{
    public function change();
}

class Car implements startAble,change{
    public function start()
    {
        echo "Car started";
    }
    public function change()
    {
        echo "Car changed";
    }
}
class MotorBike implements startAble,change{
    public function start()
    {
        echo "Bike started";
    }
    public function change()
    {
        echo "Bike changed";
    }
    
}
$c1 = new Car();
$c1->start();
$b1 = new MotorBike();
$b1->start();