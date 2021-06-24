<html lang="es">
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
	<Title>Eliminar | Biblioteca </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
	<div class="form-container">
	<span class="form-heading">Eliminar libro</span>
	<form name= "alta" action="alta.php" method="post">
	<p>Para eliminar favor de ingresar los siguientes datos:</p>
	</form>
		
	<form action="<?php echo $PHP_SELF;?>">
	<div class="input-group">
		<i class="fas fa-user"></i>
		<input type="text" name="idLibro" placeholder="ID del libro"><br/>
	</div>

	

	<div class="input-group">
		<button>
		<i>Confirmar </i><br/>
		</button>
	</div>

	
	<a href="index.php">Regresar al inicio </a>
 <br/>
