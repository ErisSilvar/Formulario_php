<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP - CALCULADORA</title>
</head>

<body>
    <?php
    if (isset($_GET['num1'], $_GET['num2'], $_GET['op'])) {
        $n1 = (float) $_GET['num1'];
        $n2 = (float) $_GET['num2'];
        $op = $_GET['op'];

        switch ($op) {
            case 'Somar':
                $resultado = $n1 + $n2;
                echo "O resultado da soma é: " . $resultado;
                break;
            case 'Subtração':
                $resultado = $n1 - $n2;
                echo "O resultado da subtração é: " . $resultado;
                break;
            case 'Multiplicação':
                $resultado = $n1 * $n2;
                echo "O resultado da multiplicação é: " . $resultado;
                break;
            case 'Divisão':
                if ($n2 != 0) {
                    $resultado = $n1 / $n2;
                    echo "O resultado da divisão é: " . $resultado;
                } else {
                    echo "Erro: Divisão por zero não permitida.";
                }
                break;
            default:
                echo "Operação inválida.";
        }
    } else {
        echo "Valores não recebidos.";
    }
    echo '<p><a href="entrada.php">Voltar</a></p>';
    ?>
</body>

</html>