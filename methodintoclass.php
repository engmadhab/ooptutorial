<?php
class Person{
    public function display(){
        echo "<h1>Welcome to SIBPLC</h1>";
    }
    public function personName(){
        echo "<p>Person name is kamal hossen</p>";
    }
    public function address(){
        echo "<p>Address is dhaka</p>";
    }
}
$a = new Person();
echo $a->display();
echo $a->personName();
echo $a->address();
?>