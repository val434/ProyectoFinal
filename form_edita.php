<!DOCTYPE HTML>
<html>
<head>
    <title> Editar libro | Biblioteca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
    li {listt-style:none;}
</style>
<body>
<h1> Editar libro  </h1>
<p> Favor de ingresar los siguientes datos: </p>
<form name="editar" action=“guarda_edicion.php” method=“POST”>


    <label for=“nombreLibro”>Nombre del libro: </label>
    <input type=“text” name=“nombre”><br/>

    <label for=“edicion”>Edición: </label>
    <input type=“text” name=“edicion”><br/>

    <label for=“editorial”>Editorial: </label>
    <input type=“text” name=“editorial”><br/>

    <label for=“nombreAutor”>Nombre del autor: </label>
    <input type=“text” name=“nombre”><br/>

    <label for=“apaterno”>Apellido paterno: </label>
    <input type=“text” name=“apaterno:”><br/>

    <label for=“amaterno”>Apellido materno: </label>
    <input type=“text” name=“amaterno”><br/>

    <input type=“submit”  value=“Enviar”>

</form>
</body>
</html>