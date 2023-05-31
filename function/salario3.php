<?php
function name($g,$y){
    $op = $g * $y;
    return $op;
}

$g2 = 1300;
$g3 = 3020;
$g4 = 10000;

$y2 = 1.1;
$y3 = 1.05;
$y4 = 1.03;
    
$novosal = name($g2,$y2);
$novosal2 = name($g3,$y3);
$novosal3 = name($g4,$y4);

echo "Salário João: $g2 " . " Novo Salário João: $novosal" . "<br>" . "Salário Luiz: $g3" . " Novo Salário Luiz: $novosal2" . "<br>" . "Salário Lucas: $g4" . " Novo Salário Lucas: $novosal3" . "<br>" . "<br>";
?>