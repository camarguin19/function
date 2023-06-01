<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste Salarial</title>
</head>
<body>

    <h1>Sistema de resajuste salarial</h1><br><br>
    <form action="" method="post">
        <label for="">Informe o salário a ser reajustado</label>
        <input type="submit" value="Calcular reajuste">
        <input type="text" name="salario" id="">
    </form>
</body>
</html>

<?php
    
    
    $salariorea = name($_POST['salario']);
     echo "<h2>" . $salariorea . "<h2>";
    function name($salario)
    {
   $salminimo = 1320;
   $salreajustado = 0;
    if ($salario <= $salminimo) {
        $salreajustado = $salario * 1.1;
   }
   if ($salario > $salminimo AND $salario <= 3 * $salminimo ) {
    $salreajustado = $salario * 1.05;
   }
   if ($salario > 3 * $salminimo) {
    $salreajustado = $salario * 1.03;
   }
return $salreajustado;

    }   
    
?>