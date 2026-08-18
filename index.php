<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="site">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>descontos</title>
    <link rel="stylesheet" href="w3.css">
</head>

<body class="w3-deep-purple">
    <div class="w3-container">
        <form class="w3-container" method="post" action="php.php">
            <label class="w3-text-green"><b>Nome:</b></label>
            <input class="w3-input" type="text" name="nome">
            <br>

            <label class="w3-text-green"><b>Forma de pagamento:</b></label>
            <select name="formapgt" id="options">
                <option value="deposito">Depósito</option>
                <option value="boleto">Boleto</option>
                <option value="cartao">Cartão de crédito</option>
            </select>
            <br>
            <br>

            <label class="w3-text-green"><b>Valor da Compra </b></label>
            <input class="w3-input" type="floatval" name="valor">
            <br>

            <button class="w3-button w3-hover-grayscale w3-green">ENVIAR</button>
        </form>
    </div>
</body>


</html>