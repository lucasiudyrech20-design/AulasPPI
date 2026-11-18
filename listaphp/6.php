<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primo</title>
</head>
<body>
    <?php
        function ehPar($num){
        if($num % 2 == 0) { echo "É par!";} 
        else { echo "É ímpar!";}
    }

    if(isset($_GET["entrada"])){
    $entrada = $_GET["entrada"];
    ehPar($entrada);
    }

    ?>

<form action="">
    <label for="entrada">Numero: </label>
    <input name="entrada" type="number">

    <input type="submit">
</form>

</body>
</html>