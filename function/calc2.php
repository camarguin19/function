<?php

function calcular($a, $b, $op)
{
    if ($op == 'soma') {
        $res = $a + $b;
        return $res;
    }

    if ($op == 'sub') {
        $res = $a - $b;
        return $res;
    }
  
    if ($op == 'multi') {
        $res = $a * $b;
        return $res;
    }
  
    if ($op == 'div') {
        $res = $a / $b;
        return $res;
    }
}
$info = calcular(10,10,'multi');
echo " O resultado é: $info";

?>