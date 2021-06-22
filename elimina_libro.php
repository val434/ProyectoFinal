
<?php
/*Recibe los valores del formulario form_libros y los imprime*/

$db = pg_connect("host=localhost port=5432 dbname=biblioteca user=hinata password=kuroo");


$query = "DELETE FROM libros[ WHERE nombreLibro = :nombreLibro ('$_POST[nombreLibro]','$_POST[edicion]',
'$_POST[editorial]','$_POST[nombreAutor]','$_POST[apaterno]',
'$_POST[amaterno]')";
$result = pg_query($query);

//imprime los valores del formulario
echo "Nombre del libro: ".$nombreLibro;
echo "</br>";
echo "Editorial: ".$editorial;
echo "</br>";
echo "Autor: " .$nombreAutor. " ".$apaterno." ".$amaterno;

?>
<a href = "index.php">Regresar al inicio</a>