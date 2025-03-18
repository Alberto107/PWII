<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Include_Require</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Início</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Países
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./brazil.php">
              <img src="https://cdn1.iconfinder.com/data/icons/ensign-11/512/38_Ensign_Flag_Nation_brazil-256.png" width="20px">
              Brazil
            </a></li>
            <li><a class="dropdown-item" href="./china.php">
              <img src="https://cdn4.iconfinder.com/data/icons/world-flags/180/flag_china-256.png" width="20px">
              China
            </a></li>
            <li><a class="dropdown-item" href="./jordan.php">
              <img src="https://cdn4.iconfinder.com/data/icons/world-flags/180/flag_jordan-256.png" width="20px">
              Jordan
            </a></li>
            <li><a class="dropdown-item" href="./italy.php">
            <img src="https://cdn4.iconfinder.com/data/icons/world-flags/180/flag_italy-256.png" width="20px">
              Italy
            </a></li>
            <li><a class="dropdown-item" href="./mexico.php">
            <img src="https://cdn1.iconfinder.com/data/icons/ensign-11/512/168_Ensign_Flag_Nation_mexico-256.png" width="20px">
              Mexico
            </a></li>
            <li><a class="dropdown-item" href="./peru.php">
            <img src="https://cdn4.iconfinder.com/data/icons/flags-vol-8/48/159-256.png" width="20px">
              Peru
            </a></li>
            <li><a class="dropdown-item" href="./india.php">
            <img src="https://cdn4.iconfinder.com/data/icons/world-flags-6/900/india_indian_national_country_flag-256.png" width="20px">
              India
            </a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contato.php">Contato</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>