<?php

$db = pg_connect("host=localhost port=5432 dbname=biblioteca user=hinata password=kuroo");


$query = "UPDATE libros SET ('$_POST[nombreLibro]','$_POST[edicion]',
'$_POST[editorial]','$_POST[nombreAutor]','$_POST[apaterno]',
'$_POST[amaterno]') WHERE nombreLibro = :nombreLibro";
$result = pg_query($query);

//imprime los valores del formulario
echo "Nombre del libro: ".$nombreLibro;
echo "</br>";
echo "Editorial: ".$editorial;
echo "</br>";
echo "Autor: " .$nombreAutor. " ".$apaterno." ".$amaterno;

?>
<a href = "index.php">Regresar al inicio</a>