<!DOCTYPE html>
<html lang="es">
<head>
  <title>Plataforma Universitaria</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(imagenes/unaf.jpg);
      background-size: cover; 
      background-position: center; 
      background-repeat: no-repeat;
    }
    .botcerrar {
  border: 1px solid #3498db;
border-radius: 5px; /* Ajusta según sea necesario */
  padding: 1px 1px; /* Ajusta según sea necesario */
  color: #3498db;
}

    .container {
      width: 80%;
      margin: auto;
      margin-top: 20px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
    }

    .add-button {
      display: block;
      margin-top: 20px;
      padding: 10px 15px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    .add-button:hover {
      background-color: #2980b9;
    }

    .card {
    margin-top: 20px;
    background-color: #f8f9fa;
    }

    .bg-custom-color {
    background-color: #449FDC;
    }

  </style>
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
              <a class="nav-link active" href="autoridades.php">Autoridades</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Institución
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Historia_Unaf.html">Historia de la Institución</a></li>
                <li><a class="dropdown-item" href="unaf-img.html">UNAF Imagenes</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Materias
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="LicenciaturaComercioExt.html">Licenciatura Comercio Exterior</a></li>
                <li><a class="dropdown-item" href="ContadorPublico.html">Contador Público</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <div class="botcerrar">
            <li class="nav-item a">
              <a class="nav-link active" href="index.html">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
        </div>
      </div>
    </nav>
  </header>

<div class="container">
  <h2>Publicaciones</h2>
  <?php
    $scon = mysqli_connect('localhost', 'root', '', 'bd_foro');

    if (!$scon) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT tabla01_nombre, tabla01_tema, tabla01_mensaje FROM tabla_01_publicacion";

    $result = mysqli_query($scon, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
  ?>

  <div class="card border-primary mb-3" style="max-width: 100%;">
  <div class="card-header bg-custom-color border-primary" style="font-size: 30px;"><?php echo $row["tabla01_tema"]; ?></div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 24px;">De: <?php echo $row["tabla01_nombre"]; ?></h5>
    <p class="card-text"><?php echo $row["tabla01_mensaje"]; ?></p>
</div>
</div>

  <?php
      }
    } else {
      echo "<p>No hay mensajes disponibles.</p>";
    }

    mysqli_close($scon);
  ?>
  <a class="add-button" href="Publicar_Foro.php">Agregar una Publicacion</a>
</div>


</body>
</html>