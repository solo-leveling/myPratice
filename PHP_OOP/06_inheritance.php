<?php
    class Machine{
        public $id,$name;
        function start(){
            echo "Engine Started\n";
        }
    }
    class Car extends Machine{
        public $color;
        function start(){
            echo "Car Started\n";
        }
        function changeGear(){
            echo "Gear Changed\n";
        }
    }
    $car1 = new Car();
    $car1->start();
    $car1->changeGear();