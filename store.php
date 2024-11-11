<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formuláriofoi enviado
    $pilotos = $_POST['pilotos']; // Recebe o piloto
    $numero = $_POST['numero']; // Recebe o numero
    $equipe = $_POST['equipe']; // Recebe a equipe
    $sql = "INSERT INTO pilotos (pilotos, numero, equipe) VALUES ('$pilotos',
'$numero', '$equipe')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a páginaprincipal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>