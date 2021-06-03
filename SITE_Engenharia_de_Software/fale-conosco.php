<?php include "config.php";
//selecao de assunto
$sql = "SELECT `cod_assunto`, `dsc_assunto` FROM `bandeira`";

$result = mysqli_query($conn, $sql);

// Registrando um Chamado

    if ($_GET["Acao"]=="enviar") {
        $assunto=$_POST["assunto"];
             $nome=$_POST["nome"];
        $email=$_POST["email"];
        $texto=$_POST["texto"];
        $sql = "INSERT INTO dado_pessoal (cod_assunto, dsc_nome_completo,dsc_email, dsc_chamado) "
                . "VALUES ('$assunto','$nome', '$email', '$texto')";
            
                mysqli_query($conn, $sql);
    }
   

      
        
    


?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylecomplementar.css">
    <script src="js/salvardados.js" type="text/javascript"></script>
    <title>Engenharia de Software | Fale Conosco</title>
    <link rel="shortcut icon" href="uepa.ico">
</head>

<body>
    
    <ul>
        <li> <img src="img/uepa-escudo80.png" alt="Logo da uepa" img-responsive img-centered> </li>

        <li><a href="https://www.uepa.pa.gov.br/">Site da Instituicao</a></a>
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

    </div>
    <div class="container">

    <form class="col-nd-12" action="fale-conosco.php?Acao=enviar" method="post">
        <div class="row">
        <fieldset class="col-md-6">
            <legend>Dados pessoais</legend>
                         
                     <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" >
            </div>
               
            <div class="checkbox">
                <label>
                <input type="checkbox" value="sim" name="spam" checked>
                Quero receber novidades da Uepa
                </label>
            </div>
        </fieldset>
        
        <fieldset class="col-md-6">
            <legend>Seu Pedido ou Reclamacao</legend>
            <div class="form-group">
                <label for="bandeira-cartao">Assunto</label>
                <select name="assunto" id="assunto" class="form-control">
                                 <?php
                                    while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo($row["cod_assunto"]); ?>"><?php echo($row["dsc_assunto"]); ?></option>
                                    <?php
                                    }
                                    ?>
                            </select>
            </div>
            <div class="form-group">
                <label for="nome">Digite aqui seu Texto</label>
                <input type="text" class="form-control" id="nome" name="texto" autofocus >
            </div>

            
        </fieldset>
    </div >

    <button type="submit" class="btn btn-primary btn-lg pull-right" id="botaoo" onclick= "salvardados ()">
                        Enviar
        </button>
    
     </form>
    </div>
                                </div>
 
    </body>

    
    <footer>
        <div class="container-center ">
            <ul class="social " id="asssbora ">
                <li><a href="https://pt-br.facebook.com/UepaOficial/">Facebook</a></li>
                <li><a href="https://twitter.com/uepa_pa">Twitter</a></li>
                <li>
                    <a href="https://www.youtube.com/user/ascomuepa">YouTube</a>
                </li>
                <li>
                    <a href="https://www.flickr.com/photos/biuepa/">Flickr</a>
                </li>
            </ul>
                          <style> .pao{margin-left: 350px;}</style>    <p class="pao">Desenvolvido por <a href="#" target="_blank">Ruan Felipe, Eduardo Oliveira, Ana Caroline</a> &copy; 2021</p>
                    
                            </div>
        </div>
    </footer>
</html>