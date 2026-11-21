<?php

class Sibplc{
    public $name;
    public $address;
    public $age;
    public function display($x,$y,$z){
        $this->name = $x;
        $this->address = $y;
        $this->age = $z;
    }

    public function show($n){
        echo "<h2>Show method</h2>";
        echo "Name: ".$this->name."<br>";
        echo "Address: ".$this->address."<br>";
        echo "Age: ".$this->age."<br>";
    }
}

$p = new Sibplc();
$p->display("Rahim", "123 Main St", 25);

$p->show("Test");