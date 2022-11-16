<?php

$primerOperando = intval($_POST["primerOperando"]);
$segundoOperando = intval($_POST["segundoOperando"]);
$opcion = $_POST["opcion"];
$result = 0;

switch ($opcion) {
    case "+":
        $result = $primerOperando + $segundoOperando;
        break; 
    case "-":
        $result = $primerOperando - $segundoOperando;
        break;
   case "*":
        $result = $primerOperando * $segundoOperando;
        break;
    case "/":
        $result = $primerOperando / $segundoOperando;
        break;
}

echo "<p>".$primerOperando.$opcion.$segundoOperando."=".$result."</p>"
?>