<?php 
// Constructor is a special method that is automatically called when an object of a class is created. It is used to initialize the properties of the class or perform any setup tasks that are required for the object. The constructor method has the same name as the class and does not have a return type. akti call a akti constructor use hobe.
    class Sibpls{
        public function __construct($x,$y){
            echo "This is a constructor method <br>";
            echo "The value of x is: ".$x."<br>";
            echo "The value of y is: ".$this->y = $y."<br>";
        }

        public function display(){
            echo "This is general method";
        }

        public function __destruct(){
            echo "<br>This is a destructor method";
        }
    }

    $p = new Sibpls(10,20);
    $x = new Sibpls("kamal", "jamal");

    $p->display();
   
?>