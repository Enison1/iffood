<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>IF Food</title>
</head>

<body class="grid">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <section class="cabecalho">
        <div class="menu">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand font-Logo" href="#"><img width="150" src="../public/svg/IF Foods.svg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                     <!-- <div class="px-2"></div> -->
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#cardapio">Cardápio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#carrinho">Carrinho</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <div class="btn-group dropstart">
                                <a class="link" data-bs-toggle="dropdown" aria-expanded="true">
                                    <img src="../public/svg/Group 95.svg" height="45" alt="perfil" loading="lazy" />
                                </a>
                                <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                                    <li><a class="dropdown-item" href="#">Sair</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </section>

    <section class="banner">
        <div class="bem-vindo">
            <div>
                <p>Bem vindo ao IF Foods!</p>
            </div>
            <div class="input-group">
                <div class="form-outline">
                    <input class="form-control" placeholder="Pesquisar" type="search" id="form1"/>
                </div>
                <button type="btn" class="btn btn-warning">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div>
                <button></button>
            </div>
        </div>
    </section>
    </div>