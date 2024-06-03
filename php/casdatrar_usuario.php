<?php
include 'db.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

if ($senha !== $confirmar_senha) {
    echo "As senhas não coincidem.";
    exit();
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso.";
    header("Location: ../login.html");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
?>
