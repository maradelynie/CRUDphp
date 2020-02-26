

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
        
    
        <div class="principal">
            <h1></h1>
            <form action="enviar_coleta.php" method="POST">
                
                                
                <label for="nome">Nome</label>
                <small>Como podemos te chamar?</small>
                <input type="text" class="form-coleta" name="nome" placeholder="Seu Nome" require>
                
                <label for="email">E-mail</label>
                <small>Digite o seu melhor e-mail para contato.</small>
                <input type="email" class="form-coleta" name="email" placeholder="Seu e-mail" require>
                
                <button type="submit" name="salvar"><div class="botao ok">Enviar</div></button> 
                               
            </form>

            
                   
        </div>
    </body>
</html>