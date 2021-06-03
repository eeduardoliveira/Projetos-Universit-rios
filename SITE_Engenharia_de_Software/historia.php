<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylecomplementar.css">
        <title>Historia do Campus </title>
    <link rel="shortcut icon" href="uepa.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 70%;
            margin: auto;
        }
        </style>

</head>


<body>
    <ul>
        <li> <img src="img/uepa-escudo80.png" alt="Logo da uepa" img-responsive img-centered> </li>

        <li><a href="https://www.uepa.pa.gov.br/">Site da Instituição</a></a>
        </li>
        <li><a href="http://ccnt.uepa.br/">Site do Centro de Ciencias Naturais e Tecnologia </a></a>
        </li>


    </ul>
    <header>
        <img src="img/logo-curso.png" alt="">
    </header>
    <?php 
     include("menu.php");
     ?>

    <div class="container">



        <h1 class="h111">Historia</h1>

        <img class="video" src=" img/fachadauepa.jpg " alt=" " img-responsive img-centered>

        <p class="h111 "> Dos 20 Campi que compõe a UEPA, 15 estão implantados fora da capital do estado. O Campus XX, o mais recente, desenvolve os cursos: Engenharia de Produção, Licenciatura em Ciências Naturais/Física, Licenciatura Plena em Geografia, Tecnologia de
            Alimentos, Tecnologia em Análise e Desenvolvimento de Sistemas e a partir de 2019 serão implementados os cursos de Engenharia Florestal e Ambienta</p>

        <p>Em seu conjunto, os cursos ofertaram 620 vagas, preenchendo 472 com discentes oriundos de 36 municípios de nosso estado. Essa abrangência constitui-se num real mecanismo de inclusão social, criação de capital intelectual (e humano) e abre janelas
            de oportunidades para que todos possam trocar conhecimentos e ampliar a compreensão sobre as especificidades desses diferentes municípios.</p>

        <p>O Campus XX, inaugurado em maio de 2010, está aliado à concepção contemporânea que vem concorrendo para a substituição do paradigma da “geração do conhecimento para a sociedade” pelo paradigma da “geração do conhecimento com a sociedade”. A emergência
            desse novo paradigma cobra das academias, além da proximidade física com os diferentes contextos, uma abordagem metodológica própria capaz de renovar a cada dia uma comunidade de interesses e objetivos voltados para o desenvolvimento sustentável.</p>

        <p>Assim foi pensado e criado o Campus XX que faz convergir a demanda regional com a missão institucional da UEPA e confere ao Município de Castanhal, como centro polarizador, um papel estratégico para as ações de desenvolvimento uma vez que concentra
            o maior número de Instituições de Ensino Superior – IES – da Região de Integração Guamá, composta pelos Municípios de Castanhal, Colares, Curuçá, Igarapé-Açú, Inhangapí, Magalhães Barata, Maracanã, Marapanim, Santa Izabel do Pará, Santa Maria
            do Pará, Santo Antônio do Tauá, São Caetano de Odivelas, São Domingos do Capim, São Francisco do Pará, São João da Ponta, São Miguel do Guamá, Terra Alta e Vigia de Nazaré.</p>
    </div>
    <div class="container">
    <h1>Fotos do Campus</h1>
    <main>
        
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/biblioteca2-min.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="img/lab-informatica-min.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="img/lanchonete-min.jpg" alt="Flower">
                </div>

                <div class="item">
                    <img src="img/quadra-poliesportiva-min.jpg" alt="Flower">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>
    </main>
</body>
<?php 
     include("rodape.php");
     ?>
</html>