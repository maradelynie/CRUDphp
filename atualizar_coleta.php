<?php


include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE `dados` SET `nome`='$nome',`email`='$email' WHERE id_coleta = $id";

$atualizar = mysqli_query($conexao,$sql);

?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1> Deu bom!</h1>
    <a name="voltaindex" id="" class="btn btn-primary" href="listar_coleta.php" role="button">Listar Dados</a>
    <a name="voltaindex" id="" class="btn btn-primary" href="index.php" role="button">Principal</a>
</body>