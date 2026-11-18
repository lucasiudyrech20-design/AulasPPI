<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primo</title>
</head>
<body>
    <?php
        function tabuada($num){
        for($i=0; $i <= 10; $i++){
            $m = $num * $i;
            echo $m.", ";
        }
    }

    if(isset($_GET["entrada"])){
    $entrada = $_GET["entrada"];
    tabuada($entrada);
    }

    ?>

<form action="">
    <label for="entrada">Numero: </label>
    <input name="entrada" type="number">

    <input type="submit">
</form>

</body>
</html>