<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Página inicial</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

  <!--Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!--Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Fontes do Google-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Angkor&family=Madimi+One&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  
</head>
<body>

  <!--Container fluido para abrigar o logotipo-->>
  <div class="container-fluid text-success text-center mt-3">
    <img src="img/logo.jpg" width="300">
    <h1 style="font-family:Oswald">Estante Virtual</h1>
  </div>

  <!-- Barra de navegação -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Página inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>

    <!--Conteiner que abrigará o conteúdo da página-->
    <div class="container text-center bg-info  mt-3 mb-5 "> <!--padding/top margin/top-->