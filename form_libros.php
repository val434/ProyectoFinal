<html lang="es">
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
	<title>Proyecto final | Biblioteca </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
	<div class="form-container">
	<span class="form-heading">Registrar nuevo libro</span>
	<form name= "alta" action="alta.php" method="post">
	<p>Favor de ingresar los siguientes datos:</p>
	
		
	<div class="input-group">
		<i class="fas fa-user"></i>
		<input type="text" name="titulo" placeholder="Titulo"><br/>
	</div>

	<div class="input-group">
		<i class="fas fa-user"></i>
		<input type="text" name="edicion" placeholder="Edicion"><br/>
	</div>
	

	<div class="input-group">
		<i class="fas fa-user"></i>
		<input type="text" name="editorial" placeholder="Editorial"><br/>
	</div>

	<div class="input-group">
		<i class="fas fa-user"></i>
		<input type="text" name="autor" placeholder="Autor"><br/>
	</div>

	<div class="input-group">
		<button>
		<i>Enviar </i><br/>
		</button>
	</div>
	</form>
	
	<a href="index.php">Regresar al inicio </a>
 <br/>
	</div>
</body>

