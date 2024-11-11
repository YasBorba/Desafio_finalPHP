<?php
include 'conexao.php';

$sql = "SELECT * FROM pilotos"; // Consulta todos os pilotos
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>ID</th><th>pilotos</th><th>numero</th><th>equipe</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada usuário
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["pilotos"] . "</td>
                <td>" . $row["numero"] . "</td>
                <td>" . $row["equipe"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum usuário encontrado."; // Mensagem se não houver usuários
}
?>