<?php

function add($n1,$n2)
{
    
    $operação = $n1 + $n2;
    return $operação;
}
function multi($n1,$n2)
{
    
    $operação = $n1 * $n2;
    return $operação;
}




$operador = 'multi'; 


if ($operador == 'add') {

echo "A soma dos valores é " . add(10,20);

}

if ($operador == 'multi') {

    echo "A multi dos valores é " . multi(10,20);
    
    }
    
?>