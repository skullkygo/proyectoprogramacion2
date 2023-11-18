<?php

    // Obtén los datos del formulario
    $nombre_usuario = $_POST["nombre_usuario"];
    $contraseña = $_POST["contraseña"];

    // Conexión a la base de datos (reemplaza con tus propios datos)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_db";

    // Completa el código para verificar la autenticación
    // Realiza una consulta en la base de datos y verifica si las credenciales son válidas

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "success";
    } else {
        echo "Inicio de sesión fallido. Verifica tus credenciales.";
    }
    
    $conn->close();

?>