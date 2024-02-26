<?php
declare(strict_types=1);

include 'autolader.inc.php';

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

// print_r($operator);
$calc = new Calc($oper, (float)$num1, (float)$num2);

try {
    echo $calc->calculator();
} catch(TypeError $e){
    echo "Error!: " . $e->getMessage();
}

