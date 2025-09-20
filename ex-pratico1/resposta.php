
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
<!--Minha solução --> 
 <!-- 
        Colodando essa formula antes do HTML

        <?php
        $numero = $_GET['numero'] ?? null;
        $antecessor = $numero !== null ? $numero - 1 : '';
        $sucessor = $numero !== null ? $numero + 1 : '';
        ?> 
        
        E esta no corpo do HTML

 <form action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
        <p>O antecessor é: </p> 
        <p>O sucessor é: </p> 
    </form> 
-->

        
<!--Correção da aula do canal Curso em Video-->
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

    
</body> 
</html>
