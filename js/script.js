document.addEventListener('DOMContentLoaded', function() {
    fetch('php/buscar_alunos.php')
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector('#studentsTable tbody');
            data.forEach(aluno => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${aluno.id}</td>
                    <td>${aluno.nome}</td>
                    <td>${aluno.idade}</td>
                    <td>${aluno.email}</td>
                    <td>
                        <form action="php/deletar_aluno.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="${aluno.id}">
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                `;
                tbody.appendChild(row);
            });
        });
});
