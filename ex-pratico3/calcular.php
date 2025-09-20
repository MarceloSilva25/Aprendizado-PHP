
<!-- <?php 

$valor = $_GET['valor'] ?? 0;
$moeda = $_GET['moedas'] ?? 'USD'; // Corrigido para combinar com o HTML

$taxas = [
   "USD" => 0.19,
   "EUR" => 0.18
];

if(array_key_exists($moeda, $taxas)){
   $convertido = $valor * $taxas[$moeda];
   echo "<h2>Resultado da Conversão</h2>";
   echo "R$ $valor convertido para <strong>$moeda</strong> é <strong>$convertido</strong>";
} else {
   echo "Moeda não suportada.";
}
?> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Resultado Da Conversão</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
      <?php 

$valor = $_GET['valor'] ?? 0;
$moeda = $_GET['moedas'] ?? 'USD'; // Corrigido para combinar com o HTML

$taxas = [
   "USD" => 0.19,
   "EUR" => 0.18
];

if(array_key_exists($moeda, $taxas)){
   $convertido = $valor * $taxas[$moeda];
   echo "<h2>Resultado da Conversão</h2>";
   echo "O em Reais de $valor convertido para <strong>$moeda</strong> é de <strong>$convertido</strong>";
} else {
   echo "Moeda não suportada.";
}
?>
</main>
</body>
</html>