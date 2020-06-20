<?php

include 'includes/Calc.php';

use Calculator\Calc;
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calc = $_POST['calc'];

$calcClass = new Calc($num1, $num2, $calc);

echo 'The result is: '.$calcClass->calcMethod();

?>
<a href="./index.php">Back to Calculator</a>