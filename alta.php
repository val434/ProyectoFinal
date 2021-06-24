
<?php
/*Recibe los valores del formulario form_libros y los imprime*/

$titulo = $_POST['titulo'];
$edicion = $_POST['edicion'];
$editorial = $_POST['editorial'];
$autor = $_POST['autor'];


$db = pg_connect("host=localhost port=5432 dbname=biblioteca user=hinata password=kageyama");


$query = "INSERT INTO libros VALUES ('".$titulo."','".$edicion."');

$result = pg_query($db, $query);

//imprime los valores del formulario
echo "Titulo del libro: ".$titulo;
echo "</br>";
echo "Edicion: ".$edicion;
echo "</br>";
echo "Editorial: ".$editorial;
echo "</br>";
echo "Autor: " .$autor;
pg_close($db);
?>
<a href = "index.php">Regresar al inicio</a>
