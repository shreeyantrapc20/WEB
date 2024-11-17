<?php 

    $num1 = 0;
    $num2 = 0;
    $sum = 0;

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is $sum";
    }

?>