<?php
$mysqli = new mysqli('mysql.maraoliveira.com.br', 'maraoliveiracom@localhost', 'n8oah3oaniwlenqpoiwenq3', 'dados') or die(mysqli_error($mysqli));

if (isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $mysqli->query("INSERT INTO dados (nome, email) VALUES('$nome', '$email')") or die(mysqli_error($mysqli);


}
?>