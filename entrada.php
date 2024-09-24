<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP - ENTRADA</title>
</head>

<body>
    <main>
        <div>
            <h1>ENTRADA</h1>
            <form action="eco.php" method="get">
                <fieldset>
                    <legend>Dados</legend>
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome">
                    <br><br>
                    <input type="submit" id="   bt" value="Ok">
                </fieldset>

            </form>
            <br>
            <br>


            <h1>ENTRADA 2</h1>
            <form action="soma.php" method="get">
                <fieldset>
                    <label for="num1">N° 1: </label>
                    <input type="number" id="num1" name="num1" required>
                    <br>
                    <br>
                    <label for="num2">N° 2: </label>
                    <input type="number" id="num2" name="num2" required>
                    <br><br>
                    <input type="submit" id="bt2" value="Somar">
                </fieldset>
                //<input type="number" id="num2" min="0" max="100" step="0.01" name="num2" required>
                //
            </form>

            <br>
            <br>
            <h1>ENTRADA 3</h1>
            <form action="calculadora.php" method="get">
                <fieldset>
                    <label for="numero">N° 1: </label>
                    <input type="number" id="num1" name="num1">
                    <br>
                    <br>
                    <label for="numero2">N° 2: </label>
                    <input type="number" id="num2" name="num2">
                    <br><br>
                    <input type="submit" name="op" value="Somar">
                    <input type="submit" name="op" value="Subtração">
                    <input type="submit" name="op" value="Multiplicação">
                    <input type="submit" name="op" value="Divisão">
                </fieldset>

            </form>

        </div>

    </main>
</body>

</html>
