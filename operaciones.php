<?php
$num1 = $_POST["numero"];
$num2 = $_POST["numero2"];
//Operaciones
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$mult = $num1 * $num2;
$div = $num1 / $num2;

if(isset($_POST["Sumar"])){
    echo("La Suma es: $suma"."<br>");
}
if(isset($_POST["Restar"])){
    echo("La resta es: $resta"."<br>");
}
if(isset($_POST["Multiplicar"])){
    echo("La Multiplicación es: $mult"."<br>");
}
if(isset($_POST["Dividir"])){
    echo("La división es: $div"."<br>");
}

?>