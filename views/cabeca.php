<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <title>Fodie</title>
</head>

<body class="grid">
    <nav class="navbar">
        <div class="logo">
            <h1 id="logo">Foodie</h1>
        </div>                
        <ul class="menu-list">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Cardápio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Sobre Nós</a></li>
        </ul>
        <div class="right-items">
            <div class="cart">
                <img id="carrinho" src="../public/svg/car.svg" alt="Carrinho">
            </div>
            <div class="profile">
                <img  src="../public/svg/Group 95.svg" alt="perfil" id="perfil">
            </div>
        </div>
    </nav>

    <div class="imagem">
        <section class="banner">
            <div class="bem-vindo">
                <div>
                    <p>Bem vindo ao Foodie!</p>
                </div>
                <div class="input-group">
                    <div class="form-outline">
                        <input class="form-control" placeholder="Pesquisar" type="search" id="form1" />
                    </div>
                    <button type="btn" class="btn btn-warning">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </section>
    </div>