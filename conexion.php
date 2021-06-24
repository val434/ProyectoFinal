<?php 
	$db_host = "localhost";
	$db_user = "hinata";
	$db_pswd = "kageyama";
	$db_name = "biblioteca;
	$pg = pg_connect("host=$db_host user=$db_user password=$db_pswd dbname=$db_name") or die ("No se pudo conectar a la base");
	?>
