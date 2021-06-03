<?php
include "config.php";

   // Registrando um Asusnto

   if ($_GET["Acao"]=="cadastrar") {
    $code_assunto = $_POST["codigo"];
    $nome_assunto = $_POST["assunto"];
    $sql = "INSERT INTO bandeira (cod_assunto, dsc_assunto) 
            VALUES ('$code_assunto', '$nome_assunto')";
                        mysqli_query($conn, $sql);
}

//select to assunto
$sql = "SELECT `cod_assunto`, `dsc_assunto` FROM `bandeira`"; "SELECT `cod_assunto`, `dsc_nome_completo`, 'dsc_email', 'dsc_chamado FROM `dado_pessoal`";
$result = mysqli_query($conn, $sql);


   
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylecomplementar.css">
    <link href="css/cor-da-barra.css" rel="stylesheet" type="text/css"/>
    <title>Painel Administrativo</title>
    <link rel="shortcut icon" href="uepa.ico">
</head>

<body>
<ul>
        <li> <img src="img/uepa-escudo80.png" alt="Logo da uepa" img-responsive img-centered> </li>

        <li><a href="https://www.uepa.pa.gov.br/">Site da Instituicao</a></a>
        </li>
        <li><a href="http://ccnt.uepa.br/">Site do Centro de Ciencias Naturais e Tecnologia </a></a>
        </li>
        <li><a href="index.php">Site do Curso</a></a>
        </li>


    </ul>
    <header>
        <img src="img/logo-curso.png" alt="">
    </header>

    <h3>Painel Administrativo</h3>
    <ul>
        <li> <a href="adm-assuntos.php ">Assuntos</a> </li>

        <li>
            <a href="adm-historico.php">Historico</a>
        </li>

            </ul>
    
    <h2 class="container">Seja Bem vindo ao Painel Administrativo do Site de BES. Selecione na barra azul acima o painel que deseja visita.</h2>

</body>

</html>