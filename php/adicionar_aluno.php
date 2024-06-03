<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: trabalho_faculdade/login.html");
    exit();
}

include 'db.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];

$sql = "INSERT INTO alunos (nome, idade, email) VALUES ('$nome', '$idade', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
?>
