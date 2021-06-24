<html>
<head>
<title>Biblioteca</title>

</head>
<body>
<?php 


	echo '<p> Bienvenido</p></br>'; 
	echo ("<table border=8><tr><td>");

	echo	'<a href="form_libros.php">Alta Libro</a></br>';
	echo	'<a href="form_edita.php">Edita Libro</a></br>';
	echo	'<a href="form_elimina.php">Elimina Libro </a></br>';
	echo "</table>";

	$dbconn = pg_connect("hostname=localhost port=5432 dbname=biblioteca user=hinata password=kageyama") or die ('Could not connect: ' . pg_last_error());
	//$output = '';
	
	$query = "SELECT * FROM libros ORDER BY idLibro";
	$result = pg_query($query) or die ('Query failed: ' . pg_last_error());

	echo "<table>\n";
	while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
	//	echo "\t <tr>\n";
		echo "<td>".$idLibro."</td>";	
	//		echo "\t \t <td> $col_value</td>\n";
		
	//	echo "\t</tr>\n";
	}
	echo "</table>\n";
	pg_free_result($result);
	pg_close($dbconn);
?>
</body>
</html>

