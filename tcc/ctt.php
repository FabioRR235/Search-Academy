<!DOCTYPE html>
<html lang="pt-br">
<?php

if(!empty($_POST['nome']) && ($_POST['email']) && ($_POST['sugestao']))
{
    require_once "conexao.php";
    $conexao = novaConexao();

    try
    {

        $sql = "INSERT INTO sugestao (nome,email,sugestao) VALUES (:n,:e,:s)";

        $stmt = $conexao->prepare($sql);

        $stmt->bindValue(':n',$_POST['nome']);
        $stmt->bindValue(':e',$_POST['email']);
        $stmt->bindValue(':s',$_POST['sugestao']);

        $stmt->execute();
        
        }
    
    catch(PDOException)
    {
        echo 'Mensagem de erro: '.$e->getMessage();
    }
}

?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="css/ctt.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Lora:ital@1&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/hat.ico" type="image/x-icon">


    
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #424243;">
        
    <img src="img/logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
  <a class="navbar-brand" href="index.php" style="font-size: 25px;">Search Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="conteudoNavbarSuportado" >
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="font-size: 25px;">Inicio </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 25px;">
          Cidades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 25px;background-color: #424243;">
          <a class="dropdown-item" href="uni.html" >Todas</a>
          <a class="dropdown-item" href="aparecida.html">Aparecida</a>
          <a class="dropdown-item" href="guara.html">Guaratinguetá</a>
          <a class="dropdown-item" href="sao-jose.html">São José dos Campos</a>
          <a class="dropdown-item" href="lorena.html">Lorena</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.html" style="font-size: 25px;">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ctt.php" style="font-size: 25px;">Contato</a>
      </li>
    </ul>
    
  </div>
      </nav>
      </head>
      </header> 
        <main>

          <body>
    <div class="box">
        <form method="post" action="#">
            <fieldset>
                <legend><b>Fórmulário de Sugestões</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Digite seu Nome" >
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required placeholder="Digite seu Email" >
                    
                </div>
                <br><br>
                <div class="inputBox-sugestao">
                  
                  <textarea  cols="30" rows="10" name="sugestao" id="sugestão" class="inputUser-s" required placeholder="Deixe uma Sugestão" ></textarea>

                  </div>
                <br><br>
                <br><br>
                <button onclick name="button">
                  Enviar
                  <div class="arrow-wrapper">
                      <div class="arrow"></div>
              
                  </div>
              </button>
            </fieldset>
        </form>
    </div>
</main>    
<?php
    if (isset($_POST['button'])) {
      $mensagem = $_POST['nome'].", Obrigado por sua sugestão!";
      echo "<script>alert('$mensagem');</script>";
    }
  ?>     
        
        
        
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
        </body>
        </html>