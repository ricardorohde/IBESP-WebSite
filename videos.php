<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Teste de Layout com Bootstrap</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/comum.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
require_once 'class/Db.php';
require_once 'class/YoutubeApi.php';
?>
</head>
<body>
<!-- INICIO DA BARRA SUPERIOR DE NAVEGAÇÃO -->
<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logo-branco.png"/></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Início<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Quem Somos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">História da Igreja</a></li>
                        <li><a href="#">Pacto das Igrejas Batistas</a></li>
                        <li><a href="#">Princípios Batistas</a></li>
                        <li><a href="#">Plano de Salvação</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Nossas Atividades<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Agenda</a></li>
                        <li><a href="#">Ação Jovem</a></li>
                        <li><a href="#">MBC</a></li>
                        <li><a href="#">MCA</a></li>
                        <li><a href="#">Escola Bíblica Dominical</a></li>
                        <!-- <li role="separator" class="divider"></li> CRIA UM SEPARADOR NO DROPDOWN-->
                        <li><a href="#">IDE</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Ministérios<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Administração</a></li>
                        <li><a href="#">Comunhão</a></li>
                        <li><a href="#">Ensino</a></li>
                        <li><a href="#">Evangelismo</a></li>
                        <li><a href="#">Serviço</a></li>
                    </ul>
                </li>
                <li><a href="videos.html">Assista Nossos Cultos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- TÉRMINO DA BARRA SUPERIOR DE NAVEGAÇÃO -->
<?php
$request = new YoutubeApi();
$videos = $request->getVideos();
//echo '<pre>';
//print_r($videos);
//echo '</pre>';
?>
<!-- ÁREA DO PLAYER -->
    <div class="container-fluid">
        <div class="row">
            <div class="embed-responsive embed-responsive-16by9 fundo-preto">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9_id5T6NxVY?autoplay=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<!-- ÁREA DA LISTA DE VÍDEOS -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-push-0 col-sm-push-8">
                <h2 class="uppercase">Mais Vistos</h2>
                <div class="row">
                <div class="col-sm-7 col-xs-5 col-xs-offset-1 col-sm-offset-2">
                    <img class="img-rounded" src="https://i.ytimg.com/vi/KzRgadnzqOg/mqdefault.jpg"/>
                    <p class="video-titulo-2">Nome do vídeo</p>
                    <div class="video-titulo-info-2">02/04/2017</div>
                </div>
                <div class="col-sm-7 col-xs-5 col-xs-offset-0 col-sm-offset-2">
                    <img class="img-rounded" src="https://i.ytimg.com/vi/KzRgadnzqOg/mqdefault.jpg"/>
                    <p class="video-titulo-2">Nome do vídeo</p>
                    <p class="video-titulo-info-2">02/04/2017</p>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-7 col-xs-5 col-xs-offset-1 col-sm-offset-2">
                    <img class="img-rounded" src="https://i.ytimg.com/vi/KzRgadnzqOg/mqdefault.jpg"/>
                    <p class="video-titulo-2">Nome do vídeo</p>
                    <p class="video-titulo-info-2">02/04/2017</p>
                </div>
                <div class="col-sm-7 col-xs-5 col-xs-offset-0 col-sm-offset-2">
                    <img class="img-rounded" src="https://i.ytimg.com/vi/KzRgadnzqOg/mqdefault.jpg"/>
                    <p class="video-titulo-2">Nome do vídeo</p>
                    <p class="video-titulo-info-2">02/04/2017</p>
                </div>
                </div>
            </div>
            <div class="col-sm-7 col-xs-pull-0 col-md-pull-3 col-md-offset-1">
                <h2 class="uppercase">Vídeos Mais Recentes</h2>
                <div class="row">
                <?php
                $i = 0;
                foreach ($videos->items as $video){
                    $i++;
                    echo "<div class='col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2'>" ;
                        echo "<img class='img-rounded' src='".$video->snippet->thumbnails->medium->url."'/>";
                        echo "<p class='video-titulo'>". $video->snippet->title ."</p>";
                        echo "<p class='video-titulo-info'>". date('d/m/Y',strtotime($video->snippet->publishedAt)) ."</p>";
                    echo "</div>";
                    if ($i == 3) {
                        echo "</div>";
                        echo "<div class='row'>";
                        $i = 0;
                    }
                }
                ?>
                </div>
        </div>
    </div>
<!-- TERMINO DO CORPO-->
<footer class="panel-custom-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <img src="img/logo-branco.png">
            </div>
            <div class="col-sm-3">
                <h2>Departamentos</h2>
                Lado Erquerdo Lado Erquerdo Lado Erquerdo Lado Erquerdo Lado Erquerdo Lado Erquerdo Lado Erquerdo Lado Erquerdo Lado Erquerdo Lado Erquerdo
            </div>
            <div class="col-sm-3">
                <h2>Contatos</h2>
                Lado Direito Lado Direito Lado Direito Lado Direito Lado Direito Lado Direito Lado Direito Lado DireitoLado Direito Lado Direito Lado Direito
            </div>
        </div>
    </div>
</footer>
<!-- start: Copyright -->
<div class="copyright">

    <!-- start: Container -->
    <p>
        &copy; 2017, Igreja Batista Ebenézer.
    </p>
</div>
<!-- end: Copyright -->
<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>