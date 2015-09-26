<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<title>Lista de Tareas</title>
</head>
<body>
	<div class="principal">
		<div class="wrap">
			<form class="formulario" id="firstForm" action="php/add_item.php" method="post">
				<input type="text" name="tareaInput" id="tareaInput" placeholder="Agrega tu tarea">
				<input type="button" class="boton" id="btn-agregar" value="Agregar Tarea">
			</form>
		</div>
	</div>

	<div class="tareas">
		<div class="wrap">
			<ul class="lista" id="lista">
				<?php include ("php/query_data.php"); ?>
			</ul>
		</div>
	</div>
	<script src="js/main.js"></script>
</body>
</html>