<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de moeda</h1>
        <?php 
        //cotação do googe 
        $cotação = 5.17;

        //Quanto você tem $$
        $real = $_REQUEST["din"] ?? 0;

        //Equivalencia em dolar
        $dolar = $real / $cotação;

        //Mostrar resulatdo 
        //echo "Seus R\$" . number_format($real, 2, ",",".") . "equivalem a US\$" . number_format($dolar, 2, ",",".");

        //Formatação de moedas com internalização
        //Biblioteca intl (internalizetion PHP)

        $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "<p>Seus" . numfmt_format_currency($padrão, $real, "BRL") . " equivalente a " . numfmt_format_currency($padrão, $dolar, "USD") . "</p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>