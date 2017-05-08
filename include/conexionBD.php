<?php

function conectarBD() {
    $servername = "localhost";
    $username = "root";
    $password = "Ruben.pc.1";
    $dbname = "SIBW2";

    // Creamos la conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Comprobar la conexión
    if (!$conn) {
        die("Conexión fallida: " . mmysqli_connect_error());
    }

    return $conn; 
}

?>