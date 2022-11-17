<?php
//OBTENEMOS LOS DATOS
$input = $_POST["input"];
$conection = mysqli_connect("localhost", "root", "");
if (!$conection) {
    echo "<p>No se pudo conectar</p>";
}
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