<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>O resultado Final</h1>
        <p>
            <?php 
        $number = $_GET["number"] ?? "numeor não expecificado.";
        $adicao = $number + 1;
        $subtracao = $number - 1;
        echo "o numero escolhido foi $number<br/>";
        echo "O numero antecessor dele é $subtracao<br/>";
        echo "O numero sucessor dele é $adicao<br/>";

        echo "o antecessor de $number é ". ($number - 1)."<br/>";
        echo " o sucessor de $number é ". ($number + 1)."<br/>";
        ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>

</html>