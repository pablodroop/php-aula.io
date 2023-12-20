<?php 
// const nome = "joão palindromo </br></br>";
// echo nome;

// define("ome", "Rossado de vieira");
// echo ome;

// for($nome=0;$nome<=10;$nome++) {
//     echo "A cotação é $nome ";
//     echo "</br>";
// }
 


$nome = 0;
while($nome < 10) {
    echo "A cotação é $nome";
    echo "<hr>";
    $nome +=2;
}

$frutas = array("maçã", "banana", "laranja");

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}


$pessoa = array("nome" => "João", "idade" => 25, "cidade" => "São Paulo");

foreach ($pessoa as $k=> $valor) {
    echo $k . ": " . $valor . "<br>";
}

// foreach ($variable as $key => $value) 

sleep(5);
echo "oi";

echo "<hr>";

die("o código se encerra aqui ");
?>