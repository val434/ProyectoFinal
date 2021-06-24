<!DOCTYPE HTML>
<html>
<head>
    <title> Editar libro | Biblioteca</title>
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
    $query = "SELECT * FROM libros WHERE idLibro='".$id."'";
    $query = pg_query($db,$query);
    $resultado = pg_fetch_assoc($query);

}

?>
<h1> Editar libro  </h1>
<p> Favor de ingresar los siguientes datos: </p>
<form name="editar" action=“guarda_edicion.php” method=“POST”>


    <label for=“nombreLibro”>Nombre del libro: </label>
    <input type=“text” name=“nombre” value="<?php echo $resultado['titulo'] ;?>"><br/>

    <label for=“edicion”>Edición: </label>
    <input type=“text” name=“edicion” value="<?php echo $resultado['edicion'] ;?>"><br/>

    <label for=“editorial”>Editorial: </label>
    <input type=“text” name=“editorial” value="<?php echo $resultado['editorialID'] ;?>"><br/>

    <label for=“nombreAutor”>Autor: </label>
    <input type=“text” name=“nombre” value="<?php echo $resultado['autorID'] ;?>"><br/>


    <input type=“submit”  value=“Enviar”>

</form>
</body>
</html>
