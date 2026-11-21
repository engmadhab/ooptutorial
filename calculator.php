<?php
    include 'calculation.php';
?>

<form action="#" method="post">
    Number One: <input type="text" name="num1"><br>
    Number Two: <input type="text" name="num2"><br> 
    <input type="submit" value="Calculate" name="calculate">

</form>


<?php 
    if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if(empty($num1) or empty($num2)) {
            echo "Please enter valid numbers.";
        } else {
            $cal = new Calculation();
            $cal->add($num1, $num2);
            echo "<br>";
            $cal->subtract($num1, $num2);
            echo "<br>";
            $cal->multiply($num1, $num2);
            echo "<br>";
            $cal->divide($num1, $num2);
        }
    }  
     

?>
