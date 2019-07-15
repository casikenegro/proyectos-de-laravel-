<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css" crossorigin="anonymous">
    <title>Farmacias Calidosa</title>
  
  </head>
  <body>
        {{csrf_field()}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/">Farmacia Calidosa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Farmacias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="/Doctor">listado Farmacias </a>
                    <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/Doctor/create">Registar Farmacia</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Empleado
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="/Doctor">listado Empleado </a>
                    <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/Doctor/create">Registar Empleado</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Registrar laboratorios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="/Doctor">listado laboratorios </a>
                    <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/Doctor/create">Registar laboratorios</a>
            </div>
          </li>
        </ul>
      </div>

      <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar medicamentos" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
        </nav>
        @yield('content')


<script src="/js/app.js">
</script>
  </body>
</html>
<html>
