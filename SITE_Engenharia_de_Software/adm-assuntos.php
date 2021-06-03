<?php
include "config.php";

   // Registrando um Asusnto

   if ($_GET["Acao"]=="cadastrar") {
    $code_assunto = $_POST["codigo"];
    $nome_assunto = $_POST["assunto"];
    $sql = "INSERT INTO bandeira (cod_assunto, dsc_assunto) 
            VALUES ('$code_assunto', '$nome_assunto')";
            var_dump($sql); 
            mysqli_query($conn, $sql);
}

//select to assunto
$sql = "SELECT `cod_assunto`, `dsc_assunto` FROM `bandeira`"; 
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

    <h3>Painel Administrativo Para assuntos</h3>
    <div class="container">
       <fieldset class="col-md-6">
       <form class="col-nd-12" action="adm-assuntos.php?Acao=cadastrar" method="post">
            <legend>Cadastre Assuntos</legend>
            
             <div class="form-group">
                <label for="codigo">Codigo do assunto</label>
                <input type="number" class="form-control" id="codigo" name="codigo" method="post" action="fale-conosco.php?Acao="> </div>
                     <div class="form-group">
                <label for="assunto">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" >
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-lg pull-right" id="botaoo" name="botaoo" />
        </form>
    </div>

    <legend> Assuntos</legend>
    <div class="container">
        <?php
    while ($row = mysqli_fetch_assoc($result)) {

?>
    <table>
            <th>Codigo do Assunto</th>
            <th>Descriçao</th>
                        <tr>
                            <td> <?php echo ($row["cod_assunto"]); ?></td>
                            <td> <?php echo ($row["dsc_assunto"]); ?></td>
</tr>
</table>
                 
        
       
        <?php } ?>
        </div>
        
</body>

</html>