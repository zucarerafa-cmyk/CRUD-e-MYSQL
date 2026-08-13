<?php
include("conexao.php");

$result = $conn->query("SELECT * FROM alunos ORDER BY id DESC");

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Plano</th>
            <th>Status</th>
            <th>Ações</th>
          </tr>";
    echo "</thead>";
    echo "tbody";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['idade'] . "</td>";
        echo "<td>" . $row['plano'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>
                <a href='editar.php?id=" . $row['id'] . "'>Editar</a> | 
                <a href='excluir.php?id=" . $row['id'] . "' onclick=\"return confirm('Deseja realmente excluir?')\">Excluir</a>
              </td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    // Mensagem exibida caso não haja registros no banco
    echo "<p class='mensagem-vazia'>Nenhum aluno cadastrado no momento.</p>";
}
?>