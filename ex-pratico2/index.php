<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "<p>Gerando um numero aleatorio entre $min e $max... <br> O valor gerado é <strong>$num</strong></p>";
        ?>

        <button onclick="jacascript:document.location.reload()">&#x1F504; Gerar outro</button>
    
    </main>
</body>
</html>