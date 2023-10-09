<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clases y Objetos POO</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	
	<!-- Cargando archivo JS -->
	<script src="persona.js"></script>
</head>
<body class="container-fluid shadow border rounded">
	<main ></main>
	<section class="container  border rounded" id="clasesPHP">
		<h2>Clases con PHP <hr></h2>
		<?php 
			include 'persona.php';
			$persona1 = new Persona("Alice", 30, 3141234567);
			$persona2 = new Persona("Bob", 25, 3121234567);

			echo "{$persona1->nombre}, {$persona1->edad}, {$persona1->telefono}<br>";
			echo "{$persona2->nombre}, {$persona2->edad}, {$persona2->telefono}<br>";
		?>
	</section>
	<section class="container border rounded" id="clasesJS">
		<h2>Clases con JS <hr></h2>

		<script type="text/javascript">
			const persona1 = new Persona("Alice", 30, "Nueva York");
			const persona2 = new Persona("Bob", 25, "Los Ángeles");

			document.write("Nombre:" + persona1.nombre + "<br>Edad: " + persona1.edad + "<br>Teléfono:" +persona1.telefono);
			document.write("<hr>");
			document.write("Nombre:" + persona2.nombre + "<br>Edad: " + persona2.edad + "<br>Teléfono:" +persona2.telefono);

		</script>
	</section>

</body>
</html>