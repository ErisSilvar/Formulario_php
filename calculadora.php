<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP - CALCULADORA</title>
</head>
<body>
    <?php
        if(isset($_GET['num1'], $_GET['num2'], $_GET['btsoma'])){
            $n1 = (float)$_GET['num1'];
            $n2 = (float)$_GET['num2'];

            $soma = $n1 + $n2;
            $soma = $_GET['btsoma'];

            echo '<p>Soma: '. $soma. '</p>';
            echo '<p><a href="entrada.php">Voltar</a></p>';
        } else {
            echo "Valores não recebidos.";
        }
    ?>
</body>
</html>