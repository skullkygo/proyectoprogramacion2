<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Universitaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
    .navbar {
      background-color: #fff;
    }
    .botcerrar {
  border: 1px solid #3498db;
border-radius: 5px; 
  padding: 1px 1px; 
  color: #3498db;
}

      body {
        font-family: Arial, sans-serif;
        background-image: url(imagenes/unaf.jpg);
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat;
    }

    h1 {
      margin: 0;
    }

    section {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      color: #333;
      text-align: center;
    }

    p {
      line-height: 1.6;
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
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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
  </header>

<h1>Universidad Nacional de Formosa</h1>
  <section>
    <h2>Autoridades Universitarias</h2>

    <h3>Rector</h3>
    <p>Chat GPT<br>
    Correo Electrónico: chatbot@inteligenciaia.edu</p>

    <h3>Vicerrector Académico</h3>
    <p>Licenciado Saporiti<br>
    Correo Electrónico: vicerrector_academico@universidadxyz.edu</p>

    <h3>Licenciado en Administracion de Empresas</h3>
    <p>Arruabarrena Rodolfo<br>
    Correo Electrónico: rodolfo@gmail.com</p>

    <h3>Licenciado en Comercio Exterior</h3>
    <p>Benitez Carlos<br>
    Correo Electrónico: benitezcarlo@steam.com</p>

    <h3>Licenciado en Contador Publico</h3>
    <p>Bordon Mariano<br>
    Correo Electrónico: marianobord@gmail.com</p>

    <h3>Regente </h3>
    <p>Bordon Ariel<br>
    Correo Electrónico: arielbrn@universidad.com</p>

    <h3>Coordinador</h3>
    <p>Musso Franco<br>
    Correo Electrónico: francomusso@gmail.com</p>

    <div class="container">
      <h2>Nuevos Cargos</h2>
      <?php
        $scon = mysqli_connect('localhost', 'root', '', 'autoridades');
    
        if (!$scon) {
          die("Connection failed: " . mysqli_connect_error());
        }
    
        $sql = "SELECT cargo, nombre, correo FROM datos_autoridades";
    
        $result = mysqli_query($scon, $sql);
    
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
      ?>
    
      <h3><?php echo $row["cargo"]; ?></h3>
      <p><?php echo $row["nombre"]; ?> <br>Correo Elecronico: <?php echo $row["correo"]; ?></p>
      
      <?php
          }
        } else {
          echo "<p>No hay mensajes disponibles.</p>";
        }
    
        mysqli_close($scon);
      ?>
  </section>
  <div>
    <a class="publi-button" href="subir_autoridades.php">Añadir Autoridad</a>
  </div>
</body>
</html>