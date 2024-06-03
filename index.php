<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Alunos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Gerenciamento de Alunos</h2>
        <button onclick="document.getElementById('addForm').style.display='block'">Adicionar Aluno</button>
        <table id="studentsTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Email</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados dos alunos serão inseridos aqui pelo JavaScript -->
            </tbody>
        </table>
        <form id="addForm" style="display:none;" action="php/adicionar_aluno.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <label for="idade">Idade</label>
            <input type="number" id="idade" name="idade" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Adicionar</button>
        </form>
        <form action="php/logout.php" method="POST">
            <button type="submit">Sair</button>
        </form>
    </div>
</body>
</html>