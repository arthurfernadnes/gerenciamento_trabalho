<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}

include 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM alunos WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso";
} else {
    echo "Erro ao deletar registro: " . $conn->error;
}
?>
