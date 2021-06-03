<?php
include "config.php";

  
//select to assunto
$sql = "SELECT  `cod_assunto`, `dsc_nome_completo`, `dsc_email`, `dsc_chamado` FROM `dado_pessoal`";
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

    <h3>Painel Administrativo para Chamados</h3>
   
        
        <legend>Historico de Chamados</legend>
           
       


    <div class="container"  >
                           <?php
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
            <div class="row" >  <table class="container">
            <th>Codigo do Assunto</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Descrição</th>

            <tr>
            <td><?php echo ($row["cod_assunto"]); ?></td>
             <td><?php echo ($row["dsc_nome_completo"]); ?></td>
             <td><?php echo ($row["dsc_email"]); ?></td>
            <td><?php echo ($row["dsc_chamado"]); ?></td>
            </tr>
            
        </table>                         
        
            
        <?php } ?>
        </div>
            

</body>

</html>