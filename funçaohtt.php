<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 1</h1>
    <form action="" method="post">
        <label for="">O nome:</label>
        <input type="text" name="nome" id="">
        <input type="submit" value="mostrar o nome">
    </form>

</body>
</html>

<?php

function name($gg)
{
    return $gg;
}

echo "<br>" . name($_POST["nome"]);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>Exercicio 2</h1>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1">
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    function calcularSoma($num1, $num2) {
        return $num1 + $num2;
    }

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    
    $soma = calcularSoma($num1, $num2);

    echo "A soma é: $soma.";
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 3</h1>

  <form action="" method="post">
    <label for="frutas">Selecione uma fruta:</label>
    <select id="frutas" name="fruta">
      <option value="maçã">Maçã</option>
      <option value="banana">Banana</option>
      <option value="laranja">Laranja</option>
    </select>
    <input type="submit" value="Enviar">

    </form>    
</body>
</html>

<?php

function exibir() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fruta = $_POST["fruta"];
      echo "A opção selecionada foi: " . $fruta;
    }
  }

  exibir();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 4</h1>
  <form action="" method="post">
    <label for="checkbox">Marque a caixa:</label>
    <input type="checkbox" id="checkbox" name="checkbox">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>

<?php

function checar() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['checkbox']) && $_POST['checkbox'] == 'on') {
        echo "A caixa de seleção está marcada.";}
        else {
        echo "A caixa de seleção está desmarcada.";
        }
    }
  }

  checar();
  ?>
