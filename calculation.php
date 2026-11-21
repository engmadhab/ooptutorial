<?php 
    class Calculation {
        public function add($a, $b) {
            echo "Summation of $a and $b is: " . ($a + $b);
        }

        public function subtract($a, $b) {
            echo "Subtraction of $a and $b is: " . ($a - $b);
        }

        public function multiply($a, $b) {
            echo "Multiplication of $a and $b is: " . ($a * $b);
        }

        public function divide($a, $b) {
            if ($b == 0) {
                echo "Division by zero error!";
            } else {
                echo "Division of $a and $b is: " . ($a / $b);
            }
        }
    }

?>