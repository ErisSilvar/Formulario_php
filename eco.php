<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP - ECO</title>
</head>

<body>
    <main>
        <?php
        if (isset($_GET['nome'])) {
            $nome = $_GET['nome'];
            echo '<p>Bom dia, ' . $nome . '</p>';
            echo '<p><a href="entrada.php">Voltar</a></p>';
        } else {
            echo "Nome não recebido.";
        }
        ?>
    </main>
</body>

</html>