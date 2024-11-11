<?php
    include 'conexao.php'; // Inclui o arquivo de conexão

    if (isset($_GET['id'])) { // Verifica se o ID foi passado
        $id = $_GET['id']; // Recebe o ID
        $sql = "SELECT * FROM pilotos WHERE id = $id"; // Consulta o usuário
        $result = $conn->query($sql); // Executa a  consulta
        $pilotos = $result->fetch_assoc(); // Obtém os dados do usuário
    }

    // Se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST ['id'];
        $pilotos = $_POST['pilotos']; // Recebe o novo modelos
        $numero = $_POST['numero']; // Recebe o novo efeito
        $equipe = $_POST['equipe']; // Recebe o novo cor
        $sql = "UPDATE pilotos SET pilotos='$pilotos', numero='$numero', equipe='$equipe' WHERE id = $id"; // Prepara a atualização

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
        } else {
            echo "Erro: " . $conn->error; // Mostra erro, se houver
       }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title> Atualizar a Lista de Pilotos</title>
</head>
<body>

    <form action="store.php" method="POST">
    <h1>Atualizar a Lista de Pilotos</h1>
        <label>Pilotos:</label>
        <input type="text" name="pilotos" value="<?php echo $pilotos['pilotos']; ?>" required>
        <label>Numero:</label>
        <input type="text" name="numero" value="<?php echo $pilotos['numero']; ?>" required>
        <label>Equipe:</label>
        <input type="text" name="equipe" value="<?php echo $pilotos['equipe']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>