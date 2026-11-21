<?php
    class Person{
        public $name;
        public $address;
        public $age;

        public function PersonName(){
            echo "Person name is: ".$this->name;
        }
        public function PersonAddress(){
            echo "Address is : ".$this->address;
        }
        public function PersonAge(){
            echo "Person age is: ".$this->age;
        }
    }

    $p = new Person();
    $p->name = "kamal hossen </br>";
    $p->address = "Dhaka <br>";
    $p->age = "25";
    $p->PersonName();
    $p->PersonAddress();
    $p->PersonAge();

?>