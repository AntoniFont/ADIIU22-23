<?php
//INICIAMOS LA CONEXION
$conection = mysqli_connect("localhost", "root", "");
if (!$conection) {
    echo "<p>No se pudo conectar</p>";
    die("No se pudo conectar");
}
//OBTENEMOS LOS DATOS Y LOS TRATAMOS SI FUESE NECESARIO
$isSeguro = $_POST["isSeguro"];
$input = "";
if(strcmp($isSeguro,"true") == 0){ // if($isSeguro == true)
    $input = mysqli_real_escape_string($conection,$_POST["input"]);
}else{
    $input = $_POST["input"];
}
//ENTRAMOS EN LA BASE DE DATOS CORRECTA Y EJECUTAMOS LA QUERY
mysqli_select_db($conection, "prueba");
$query = "SELECT * FROM tablaprueba where id = \"".$input."\"";
echo "<p>La query es: " . $query."</p>";
$resultado = mysqli_query($conection, $query);
//MOSTRAMOS EL RESULTADO
$numFilas = 0;
while ($fila = mysqli_fetch_array($resultado)) {
    if($numFilas == 0){ //Imprimimos la cabecera
        $contadorColumnas = 0;
        echo "<p>";
        foreach($fila as $key =>$valor){
            if($contadorColumnas %2 != 0){
                echo $key."       ";
            }
            $contadorColumnas = $contadorColumnas +1;
        }
        echo "</p>";
    }
    $contadorColumnas = 0;
    echo "<p>";
    foreach ($fila as $key => $valor) {
        if($contadorColumnas %2 != 0){    
            echo $valor."       ";
        }
        $contadorColumnas = $contadorColumnas +1;
    }
    echo "</p>";
    $numFilas = $numFilas +1;
}
?>