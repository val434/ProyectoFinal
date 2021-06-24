<?php

$titulo=$_POST['titulo'];
$edicion=$_POST['edicion'];
$editorial=$_POST['editorial'];
$autor=$_POST['autor'];

$db = pg_connect( "host=localhost port=5432 dbname=biblioteca user=hinata password=kageyama") or die (pg_last_error());
 
if($db){
  $query = "DELETE FROM libros WHERE $idLibro =".$id;
  $query = pg_query($db,$query);
  $resultado = pg_fetch_assoc($query);
  if($query){
    echo "<p> El libro se eliminó exitosamente</p>";
  }
}



pg_close($db);
?>
<a href = "index.php">Regresar al inicio</a>
