<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <Style>
    
body{
    margin: 0;
    padding: 0;
    <font-family: sans serif;
    }
    .color-container{
     width: 16px;
     height: 16px;
     Display: inline-block;
     border-radius: 4px;
    }
    a{
        text-decoration: none;
     }
    </Style>
    </head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">manualidades</a></li>
            <li><a class="dropdown-item" href="#">Reparacione de electrodomesticos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">manualidades</a></li>
            <li><a class="dropdown-item" href="#">Reparacione de electrodomesticos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuenta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Registrarse</a></li>
            <li><a class="dropdown-item" href="#">Iniciar Sesio</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>

</body>
</html>