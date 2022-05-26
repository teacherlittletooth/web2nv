<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <title>Página inicial</title>
    </head>
    <body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Logotipo da barra de navegação -->
    <a class="navbar-brand" href="https://www.youtube.com">
      <img src="" alt="Logo" title="Logo" height="100px" />
    </a>
    <!-- Botão para mostrar itens em telas menores -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../public/lista.php">
            Listar pedidos</a>
        </li>
        
      </ul>
      
      <form action="#">
        <div class="nav-item d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </form>
      

    </div>
  </div>
</nav>