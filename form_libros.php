<html lang="es">
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
	<title>Proyecto final | Biblioteca </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	$db= pg_connect("hostname=localhost 
    port=5432 dbname= biblioteca user=hinata password=kageyama")
or die ('Could not connect: ' . pg_last_error());
if($db){
    $query = "SELECT * FROM editorial ";
    $query = "SELECT * FROM autor ";
    $query = pg_query($db,$query);
    $result = pg_fetch_assoc($query);


}
?>
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
	

	
  
		<div class="form-field">
			<select id="editorial">
				<option value="">Editorial</option>
			<?php	
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo '<option value="".$row['idEditorial'].'">'.$row['nombreEditorial'].'</option>';
					}
				}else{
					echo '<option value=""> Editorial no disponible</option>;
				}
				
				?>
			</select>
		
		</div>
		
		<div class="form-field">
			<select id="editorial">
				<option value="">Editorial</option>
			<?php	
			$query = "SELECT * FROM autor ";
 	  	 	$query = pg_query($db,$query);
  	    	        $result = pg_fetch_assoc($query);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo '<option value="".$row['idAutor'].'">'.$row['nombreAutor'].'</option>';
					}
				}else{
					echo '<option value=""> Autor no disponible</option>;
				}
				
				?>
			</select>
		
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

