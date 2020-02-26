
<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">  
        <title>CRUD PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    
    <body>
        <header>
                <i class="fab fa-php fa-lg fa-5x"> </i>
                <span>Projeto simplificado de CRUD com o objetivo de criar um plugin de captura de emails.</span>
                <a href="../index.php"><div class="botao voltar">x</div></a>
        </header>
        <main>

      <h1>Banco de Dados </h1> 
    
      <small>Clique no dado para editar; </small>
      <div class="listar"> 
        <ul>
          <?php

            include 'conexao.php';

            $sql = "SELECT * FROM `dados`";
            $busca = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($busca)){
                $id_coleta = $array['id_coleta'];
                $nome = $array['nome'];
                $email = $array['email'];

                ?>
                <li><a href="editar_coleta.php?id=<?php echo $id_coleta ?>" >  <?php echo $nome?> < <?php echo $email?> > </a>
            <?php 
            }
          ?>
          </ul>
      </div>
      <a href="../index.php" ><div class="botao voltar">Voltar para o Inicio</div></a>
    </main>
    </body>
</html>