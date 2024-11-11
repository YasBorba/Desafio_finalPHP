<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<link rel="stylesheet" href="style.css">

<title>Formula 1</title>
</head>
<body>
        <form action="store.php" method="POST">
        <h1>Pilotos de Formula 1</h1>
        <label>Pilotos:</label>
        <input type="text" name="pilotos" required>
        <label>Numero:</label>
        <input type="text" name="numero" required>
        <label>Equipe:</label>
        <input type="text" name="equipe" required>
        <br>
        <br>
        <input type="submit" value="Registrar Piloto">

        
        <br>
        <br>

            <h2 id="ti2">Lista de pilotos</h2>
            <br>
            <div id="pilotos">
            <?php include 'read.php' ?>
            </div>
    </div>
    </form>
</body>
</html>