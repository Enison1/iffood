<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>IF Food</title>
</head>

<body>
    <script src="MDB5-STANDARD-UI-KIT-Free-6.3.1/src/js/free/dropdow.js"></script>

    <div class="cabecalho">
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand font-Logo" href="#">IF Foods</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Cardápio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Carrinho</a>
                            </li>
                        </ul>
                        <!-- Avatar -->
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <img src="svg/Group 95.svg" class="rounded-circle" height="35" alt="perfil"
                                    loading="lazy" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                <li>
                                    <a class="dropdown-item" href="#">Meu perfil</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Configurações</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <div class="banner">
        <div class="main">
            <div>
                <p>Bem vindo ao IF Foods!</p>
            </div>
            <div class="input-group">
                <div class="form-outline">
                    <input width="300" placeholder="Pesquisar" type="search" id="form1" class="form-control" />
                    <!-- <label class="form-label" for="form1">Pesquisar</label> -->
                </div>
                <button type="button" class="btn btn-warning">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    </div>