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
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fin = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fin .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        
        // var_dump($dados);
        
        $cotação = $dados ["value"][0]["cotacaoCompra"];
        
        // echo "A cotação é $cotação"
        //cotação do googe 
        // $cotação = 5.17;

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