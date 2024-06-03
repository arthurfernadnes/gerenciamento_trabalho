<?php
session_start();
include 'db.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verificando credenciais do usuário
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $linha = $resultado->fetch_assoc();
    if (password_verify($senha, $linha['senha'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: php/index.php");
    } else {
        echo "Senha inválida";
    }
} else {
    echo "Usuário não encontrado";
}
?>

