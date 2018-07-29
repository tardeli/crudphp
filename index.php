<!DOCTYPE html>
<html>
<head>
	<title>Controle de Cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class = "container">
		
		<?php
			include 'header.php';
		?>

		<a class="btn btn-success" href="cadastro.php">Novo Cliente</a></br></br>

		<?php
			include 'listar.php';
			include 'footer.php';
		?>

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>

