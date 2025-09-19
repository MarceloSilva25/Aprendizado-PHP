<?php
// Mudança 1: Calcular os valores ANTES do HTML para evitar erro de variável indefinida
$numero = $_GET['numero'] ?? null; // Mudança 2: Usar operador de coalescência para evitar erro se não enviado
$antecessor = $numero !== null ? $numero - 1 : ''; // Mudança 3: Só calcula se número foi enviado
$sucessor = $numero !== null ? $numero + 1 : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"];
                $a = $n - 1;
                $s = $n + 1;
                echo "O Numero escolhido foi <strong> $n </strong> .";
                echo "<br>O seu antecessor é $a .";
                echo "<br>O seu sucessor é $s.";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>
    </main>

    <!-- <form action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
        <p>O antecessor é:</p> 
        <p>O sucessor é:</p> 
    </form> -->
</body> 
</html>