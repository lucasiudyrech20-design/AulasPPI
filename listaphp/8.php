<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soma</title>
</head>
<body>
 <?php
    if(isset($_POST["numeros"])) {
        $entrada = $_POST["numeros"];
        $numeros = explode(" ", $entrada);
        $soma = 0;

        foreach($numeros as  $num) {
            $soma += $num;
        }
        echo "Soma: " . $soma;
    }
    ?>

<form method="POST">
    <label for="entrada">Numeros: </label>
    <input name="numeros" id="numeros" type="text">
    <input type="submit">
</form>

</body>
</html>