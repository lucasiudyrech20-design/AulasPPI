<!DOCTYPE html>
<html lang="en">
<head>
    <title>Random</title>
</head>
<body>
<?php
if(isset($_GET["min"]) && isset($_GET["max"])){
$min = $_GET["min"];
$max = $_GET["max"];

echo "<h1>".rand($min, $max)."</h1>";
}
?>

<form action="">
    <label for="min">Minimo: </label>
    <input name="min" type="number" value="<?php echo $min; ?>">

    <label for="max">Maximo: </label>
    <input name="max" type="number" value="<?php echo $max; ?>">

    <input type="submit">
</form>


    
</body>
</html>