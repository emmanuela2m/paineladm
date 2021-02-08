<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pagina Inicial</title>
        <link rel="stylesheet" href="site/plugins/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="site/plugins/icomoon/style.css"/>
        <link rel="stylesheet" href="site/assets/css/contato.css"/>
        <link rel="stylesheet" href="site/assets/css/noticias.css"/>
        <link rel="stylesheet" href="site/plugins/footer/dist/style.css"/>
    </head>
    <body>
        <header class="container">
            <!--slides-->

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="site/assets/img/WhatsApp Image 2020-12-14 at 09.54.36 (1).jpeg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="site/assets/img/WhatsApp Image 2020-12-14 at 09.54.36.jpeg" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="site/assets/img/WhatsApp Image 2020-12-14 at 09.54.37 (1).jpeg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="site/assets/img/WhatsApp Image 2020-12-14 at 09.54.37.jpeg" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
            <!--fim slides-->

            <!--navegação-->         
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="?pg=inicio-site">Inicio</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=sobre">Sobre</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=servicos-site">serviços</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=produtos-site">Produtos</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=contato-site">Contato</a> </li>
                    </ul>
                    
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Área Administrativa</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="?pg=login">Login</a>
                                    <a class="dropdown-item" href="?pg=login2">Login2</a>
                                    <a class="dropdown-item" href="?pg=login3">Login3</a>
                                    <a class="dropdown-item" href="?pg=login4">Login4</a>
                                    <!--manusouza-->   
                                </div>
                            </li>
                        </ul>
                </div>
            </nav>
            <!--fim da navegação-->

        </header>