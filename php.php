<?php
$mensagem = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $valorCompra = $_POST["valor"];
    $formaPagamento = $_POST["formapgt"];
    $desconto = 0;
    $total = 0;
    // corrigido: cálculo incorreto para boleto e depósito
    if ($formaPagamento == "cartao") {
        $desconto = 0;
        $total = $valorCompra;
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com cartão de crédito. Não há desconto. Valor total: R$".$total;
    } elseif ($formaPagamento == "boleto") {
        $desconto = $valorCompra * 0.08; // corrigido: 8% para boleto
        $total = number_format(($valorCompra - $desconto), 2, ',', '.');
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com boleto. Seu desconto é de R$ $desconto. Valor total: R$".$total;
    } elseif ($formaPagamento == "deposito") {
        $desconto = $valorCompra * 0.1; // corrigido: 10% para depósito
        $total = number_format(($valorCompra - $desconto), 2, ',', '.');
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com depósito. Seu desconto é de R$ $desconto. Valor total: R$".$total;
    } else {
        $mensagem = "Forma de pagamento inválida.";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="w3.css">
</head>
<body class="w3-purple">
    <div class="w3-green">
        <h2><?=$mensagem?></h2>
        <p>Não foi muito difícil consertar o código, só havia alguns pequenos erros que seriam gerados por falta de atenção na hora de programar, isso demonstra que é de extrema importância revisar o código antes de testar!</p>

        <a href="index.php" class="w3-button w3-purple">Voltar ao início</a>
</div>
    <h2></h2>
</body>
</html>