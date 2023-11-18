<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establece la conexión a la base de datos (Completa con la información correcta)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login_db";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica la conexión a la base de datos
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Obtiene los datos del formulario (Completa con los nombres de campo correctos)
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nombre_usuario, contraseña, email) VALUES ('$nombre_usuario', '$contraseña', '$email')";

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      text-align: center;
    }

    .titulo {
      background-color: #3498db;
      color: #fff; 
      padding: 10px;
      text-align: center;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    h2 {
      color: #333;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 20px;
    }
    .custom-btn {
  background-color: rgb(63, 167, 72);
  color: #fff;
}
    a.boton {
    border: 1px solid #3f91df;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    color: #3f91df;
}
  
      button {
        background-color: rgb(83, 172, 91);
        color: black;
        padding: 6px 10px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        width: 40%;
      }
     
      a.boton:hover{
    background-color: #3f91df;
    color: #fff;
}

      .custom-btn:hover {
    background-color: rgb(23, 107, 30);
    color: #fff;
}
    
  </style>
</head>
<script>
  
</script>

<body>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <header>
  </header>
  
  <div class="container">
    <h2 class="titulo">Registrarse</h2>
    <form method="post">
      <label for="Numero de documento">Usuario:</label>
      <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" required>
        <br>
        <div class="form-group">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" id="contraseña" name="contraseña" required>
        <br>
        <div class="form-group">
        <label for="email">email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
        <br>
 <div>
        <button class="btn custom-btn" type="submit">Registrarse</button>
        <br><br>
        <a href="index.html" class= "boton" >Iniciar Sesión</a>
      </div>
      
    </form>
  </div>
  <div class="mensaje">
  <?php
  // Muestra el mensaje generado por PHP
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($nombre_usuario)) {
      if (mysqli_query($conn, $sql)) {
        echo "<p class='mensaje-exito'>¡El formulario se ha enviado correctamente!</p>";
      } else {
        echo "<p class='mensaje-error'>Error al enviar el formulario: " . mysqli_error($conn) . "</p>";
      }
    }
  }
  ?>
</div>
  
</body>
</html>