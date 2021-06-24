<!DOCTYPE html>
<html>
<head>
    Biblioteca
</head>
<body>
<?php
    echo '<p> Bienvenido </p></br>';
    echo '<a href="form_libros.php></a>"';
    echo '<a href="form_edita.php></a>"';
    echo '<a href="form_elimina.php></a>"';

    $dbconn= pg_connect("hostname=localhost 
    port=5432 dbname= biblioteca user=hinata password=kageyama")
    or die ('Could not connect: ' . pg_last_error());

    $query = "SELECT * FROM libros ORDER BY idLibro";
    $result = pg_query($db,$query) or die ('Query failed: ' . pg_last_error());

    echo "<table>\n";
    while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
            $idLibro

    }
    echo "</table>\n";
    pg_free_result($result);
    pg_close($dbconn);

?>
</body>
</html>
