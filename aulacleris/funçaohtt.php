<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 1</h1>]
    <form action="" method="post">
        <label for="">O nome:</label>
        <input type="text" name="name" id="">
        <input type="submit" value="mostrar o nome">
    </form>

</body>
</html>

<?php

function name($gg)
{
    return $gg;
}

echo "<br>" . name($_POST["name"]);


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Exercicio 2</h1>
    
    <form action="" method="post">

        <label for="">Numeros</label>
        <input type="number" name="primeiro numero" id="">
        <input type="number" name="Segundo numero" id="">
        <input type="submit" value="Mostrar resultado">

    </form>


</body>
</html>

<?php

function numeros($n,$n1)
{
    return $n + $n1;
}

echo "<br>" . numeros($_POST["numero"]) . numeros($_POST["number"]);




?>