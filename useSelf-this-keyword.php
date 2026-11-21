<?php
 class Sibplc{
    public function sib(){
        echo "<h2>This is form sibplc</h2>";
    }
    public function allsib(){
        echo "<h2>This is from all method </h2>";
    }

    public function abc(){
        self::sib(); //Scope Resoulation operator
        self::allsib();

        echo "<h1>Use this keyword</h1>";
        $this->sib();
        $this->allsib();

    }

    
 }


 $s = new Sibplc();

 echo $s->abc();
?>