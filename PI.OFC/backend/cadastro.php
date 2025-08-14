<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro (nome, data_nascimento, email, senha) VALUES ('$nome', '$data_nascimento', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    header("Location: http://localhost/PI.OFC/index.html");
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
