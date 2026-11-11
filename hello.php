
<h1> <?php  echo "Hello capitão broxa!"; ?> </h1>

<?php
$valor=50;
echo "<p>".$valor."<p>"; //Concatena com string
echo "<p> $valor <p>"; //String
echo '<p> $valor <p>'; //String literal, não interpreta

$nome="Lucas";
echo $nome;

$array=""; // como string
$array=array(); //como array
$array=["pera", "banana", "morango"]; //como array

echo "<br>";
print_r($array);

echo "<ul>";
for($i=0; $i<count($array);$i++){
    echo "<li> $i $array[$i] </li>";
}
echo "<ul>";


?>