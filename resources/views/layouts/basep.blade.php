<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>BETHLEHEM</title>

</head>

<body class="p-3 mb-2 bg-light text-dark">
<img src="logo.jpeg" alt="Logo" style="width: 100px;px;">  
  <div >
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <nav class="navbar navbar-expand-md navbar-light bg-warning text-white">
    
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="MenuNavegacion" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="navbar-brand" href="/">Inicio </a>
          </li>
          <li class="nav-item active">
            <a class="navbar-brand" href="/nosotros">Nosotros </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/sociedades" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sociedades </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/femenil">Femenil</a></li>
            <li><a class="dropdown-item" href="juvenil">Juvenil</a></li>
            <li><a class="dropdown-item" href="caballeros">Caballeros</a></li>
          </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/sociedades" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Grupos </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="oracion">Comision de Oracion</a></li>
            <li><a class="dropdown-item" href="dominical">Escuela Domical</a></li>  
          </ul>
          </li>

          <li class="nav-item active">
            <a class="navbar-brand" href="/galeria">Galeria </a>
          </li>
          
          <!--li class="nav-item active">
            <a class="navbar-brand" href="#">navegacion1 </a>
          </li>
          
          <li class="nav-item active">
            <a class="navbar-brand" href="#">navegacion1 </a>
          </li-->


        </ul>
      </div>
    </nav>
  </div></ul>
  <div class="container">
    @yield('contenido')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>