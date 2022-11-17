<?php
        $conection = mysqli_connect("localhost","root",""); 
        if(!$conection){
            echo "<p>No se pudo conectar</p>";
        }
        mysqli_select_db($conection,"prueba");
        $resultado = mysqli_query($conection,"SELECT * FROM tablaprueba ORDER BY id");
        
        
        
        while($fila = mysqli_fetch_array($resultado)){
            //echo "<p>".$fila["id"]."<br>"
            //echo print_r($fila);
            echo "<p>";
            for($i = 0; $i<count($fila)/2 ; $i++){
                echo $fila[$i]." ";
            }
            echo "</p>";
        }
?>