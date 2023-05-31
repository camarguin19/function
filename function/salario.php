<?php
function calculos($sal, $res)
{
$op = $sal * $res;
return $op;
}

$dados = array(
    array(
        "nome" => "Guin",
        "salario" => 1320,
        "reajuste" => 1.1 
    ),
    array(
        "nome" => "Darruiz",
        "salario" => 2190,
        "reajuste" => 1.05 
    ),
    array(
        "nome" => "Gu",
        "salario" => 7000,
        "reajuste" => 1.03
    ),
);

foreach ($dados as $stats) {
    $salario = $stats["salario"];
    $reajuste_percentual = $stats["reajuste"];
    echo "Nome: " . $stats["nome"] . '<br>' . " Salário: " . $stats["salario"] . '<br>' . " Reajuste: " . calculos($stats["salario"],$stats["reajuste"]) . '<br>' . "<br/>"; 
}

?>







