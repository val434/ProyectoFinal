<!DOCTYPE HTML>
<html>
<head>
    <title> Eliminar libro | Biblioteca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<?php
//recibe valor de index.php al solicitar editar un registro de libro
$id = $_GET['id'];
$db= pg_connect("hostname=localhost 
    port=5432 dbname= biblioteca user=hinata password=kageyama")
or die ('Could not connect: ' . pg_last_error());
if($db){
	echo "<p>El libro a eliminar es: </p>";
    $query = "SELECT * FROM libros WHERE idLibro='".$id."'";
    $query = pg_query($db,$query);
    $resultado = pg_fetch_assoc($query);

}

?>
<h1> Eliminar libro  </h1>
	
<form name="eliminar" action=“elimina_libro.php” method=“POST”>


    <input type=“submit”  value=“Confirmar”>

</form>
</body>
</html>
