
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora IMC</title>
</head>
<body>
    <?php
    if(!isset($_GET["nome"]) && !isset($_POST["peso"])) {
    ?>
        <h2>Dados pessoais</h2>
        <form method="GET">
            <label>Nome:</label>
            <input type="text" name="nome" required><br>

            <label>E-mail:</label>
            <input type="email" name="email" required><br>

            <input type="submit" value="Continuar">
        </form>

    <?php
    }

    else if(isset($_GET["nome"]) && !isset($_POST["peso"])) {
        $nome = $_GET["nome"];
        $email = $_GET["email"];
    ?>

        <h2>Dados físicos</h2>
        <form method="POST">
            <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">

            <label>Peso (kg):</label>
            <input type="number" name="peso" step="any" required><br>

            <label>Altura (m):</label>
            <input type="number" name="altura" step="any" required><br>

            <input type="submit" value="Calcular IMC">
        </form>

    <?php
    }

    else if(isset($_POST["peso"]) && isset($_POST["altura"])) {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if($peso > 0 && $altura > 0) {
            $imc = $peso / ($altura * $altura);
            $imcFormatado = number_format($imc, 2, ",", ".");
            echo "<h2>Resultado do IMC</h2>";
            echo "Nome: " . htmlspecialchars($nome) . "<br>";
            echo "E-mail: " . htmlspecialchars($email) . "<br>";
            echo "Peso: " . $peso . " kg<br>";
            echo "Altura: " . $altura . " m<br>";
            echo "IMC: " . $imcFormatado;
        } else {
            echo "Peso e altura devem ser maiores que zero!";
        }

    }

    ?>

</body>
</html>
