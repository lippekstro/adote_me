<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote-Me</title>
    <link rel="shortcut icon" href="/adote_me/imgs/logofavicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="/adote_me/css/bootstrap.css">
    <script src="/adote_me/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="/adote_me/css/index.css" />

    <script src="/adote_me/js/script.js" defer></script>


</head>

<body>
    <header>
        <div class="container text-center" id="top">
            <div class="row">
                <div class="col">
                    <a href="/adote_me/index.php"><img src="/adote_me/imgs/Imglogo.png" alt="Adote-Me" title="Adote-Me" id="AdoteMe" /></a>
                </div>
                <div class="col">

                    <input list="browsers" name="browser" id="browser" placeholder="Buscar">

                    <datalist id="browsers">
                        <option value="Cachorro">
                        <option value="Gato">
                        <option value="Coelho">
                        <option value="Caramelo">
                        <option value="Hamster">
                        <option value="Vira lata">
                        <option value="Peixe">
                        <option value="Ave">
                        <option value="Poodle">
                        <option value="Pug">
                        <option value="Golden">



                    </datalist>
                    <button id="btnBusca">Buscar</button>

                    <!--  datalist -->




                </div>

                <div class="col">
                    <?php if(!isset($_SESSION['usuario'])): ?>
                    <a href="/adote_me/views/login.php"><button type="submit" class="btn btn-dark" id="Login">
                            Login
                        </button></a>
                    <?php elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] == 1): ?>
                        <a href="/adote_me/views/"><button type="submit" class="btn btn-dark" id="Login">
                            Perfil
                        </button></a>
                    <?php elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] == 2): ?>
                        <a href="/adote_me/views/"><button type="submit" class="btn btn-dark" id="Login">
                            Gerenciar
                        </button></a>
                    <?php endif; ?>
                    <a href="/adote_me/views/cadastro_usu.php"><button type="submit" class="btn btn-dark" id="Quero adotar">
                            Cadastrar
                        </button></a>
                    <a href="/adote_me/views/denuncie.php"><button type="button" class="btn btn-danger" id="denuncie">Denuncie</button></a>
                </div>
            </div>
        </div>
    </header>
    <nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar02">
    <div class="container-fluid" id="menu">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link active" href="/adote_me/views/catalogo.php">Catálogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/adote_me/views/sobrenos.php">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/adote_me/views/faq.php">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/adote_me/views/dicas.php">Dicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/adote_me/views/cadastro_pet.php">Cadastrar Pet</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    #menu {
      background-color: #c1926f;
      font-size: 16px;
    }

    #menu a {
      color: white;
      text-decoration: none;
    }

    #navbarScroll {
      justify-content: space-between;
      padding: 0 15px;
      margin-left: 15%;
      margin-right: 15%;
    }

    ul{
      justify-content: space-evenly;
      width: 100%;
     
    }
    #navbar02{
      padding: none;
      margin: none;

    }


    /* Additional styles for smaller screens */
    @media only screen and (max-width: 480px) {
      #menu {
        font-size: 14px;
      }
    }
  </style>
       <!--  <div class="container text-center" id="nav">
            <div class="row row-cols-6" id="navlink">

                <div class="col"><a href="/adote_me/views/catalogo_pet.php">Catálogo de pets</a></div>
                <div class="col"><a href="/adote_me/views/sobrenos.php">Quem Somos</a></div>
                <div class="col"><a href="/adote_me/views/faqs.php">FAQ</a></div>
                <div class="col"><a href="/adote_me/views/dicas.php">Dicas de cuidado</a></div>
                <div class="col"><a href="/adote_me/views/cadastro_pet.php">Cadastro de Pet</a></div>

            </div>
        </div> -->
    </nav>
    </header>
    <main>