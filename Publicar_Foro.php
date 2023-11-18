<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establece la conexión a la base de datos (Completa con la información correcta)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bd_foro";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica la conexión a la base de datos
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Obtiene los datos del formulario (Completa con los nombres de campo correctos)
    $nombre = $_POST["nombre"];
    $tema = $_POST["tema"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO tabla_01_publicacion (tabla01_nombre, tabla01_tema,tabla01_mensaje) VALUES ('$nombre', '$tema', '$mensaje')";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Publicacion de Foro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
  font-family: Arial, sans-serif;
}

.titulo {
      background-color: #3498db;
      color: #fff; 
      padding: 10px;
    }

.logo {
  width: 10px;
}

h2 {
  color: #333;
}

.form-group {
  margin-bottom: 15px;

}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 20px;
  resize: none;

}

button {
  background-color: #49AAEA;
  color: black;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #3C8ABE;
}

.enlace-boton {
  float: right;
}

a {
  text-decoration: none;
  color: #1e90ff;
}

.mensaje_exito {
  text-align: center;
  width: 100%;
  padding: 12px;
  background-color: green;
  color: #fff;
}

.mensaje_error {
  text-align: center;
  width: 100%;
  padding: 12px;
  background-color: red;
  color: #fff;
}

.publi-button {
      display: block;
      margin-top: 20px;
      padding: 10px 15px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      text-align: center;
    }

    .publi-button:hover {
      background-color: #2980b9;
    }

  </style>
  <script>
    function ValidarPublicacion() {

      var nombre = document.getElementById("nombre").value;
      var email = document.getElementById("tema").value;
      var mensaje = document.getElementById("mensaje").value;

      if (mensaje.trim() === "") {
        alert("Por favor, ingrese un mensaje.");
        return false;
      }

      if (nombre.trim() === "") {
        alert("Por favor, ingrese su nombre.");
        return false;
      }

      if (tema.trim() === "") {
        alert("Por favor, ingrese un tema.");
        return false;
      }

      

      return true; // El formulario se enviará si todos los campos están completos.
    }
  </script>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <header>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <img src="imagenes/logo_guarani.png" alt="Bootstrap" width="200" height="50">
        <div class="container-fluid">
          <a class="navbar-brand" href="inicio.html">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Publicar_Foro.php">Foro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Consultas</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Materias
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="LicenciaturaComercioExt.html">Licenciatura Comercio Exterior</a></li>
                  <li><a class="dropdown-item" href="ContadorPublico.html">Contador Publico</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

  </header>
  <div class="container">
    <h2 class="titulo">Publicar Mensaje</h2>
    <form method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>
      <br>
      <div class="form-group">
        <label for="tema">Tema:</label>
        <input type="text" id="tema" name="tema" required >
      </div>
      <br>
      <div class="form-group">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="10" required ></textarea>
      </div>
      <br>
      <div>
      <button type="submit">Enviar</button>
      </div>
    </form>
  </div>
  <div>
    <a class="publi-button" href="Publicaciones_Foro.php">Ver Publicaciones</a>
  </div>

  <?php
  // Muestra el mensaje generado por PHP
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($nombre)) {
      if (mysqli_query($conn, $sql)) {
        echo "<<p class='mensaje_exito'>¡La Publicacion se ha enviado Correctamente!</p>";
      } else {
        echo "<p class='mensaje_error'>Error al Enviar Publicacion: " . mysqli_error($conn) . "</p>";
      }
    }
  }
  ?>
</div>
  
</body>
</html>