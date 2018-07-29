<html>
<head>
	<title>Controle de Cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">

		<?php
			include 'header.php';
		?>

		<h1>Cadastro de Cliente</h1>

		<form method="get" action="daocliente.php">
			
				<div class ="form-group">
					<label>Nome: </label>
					<input class="form-control" type="text" name="nome" >
				</div>
				<div class ="form-group">
					<label>Cpf: </label>
					<input class="form-control" type="text" name="cpf" >
				</div>
				<input type="hidden"  name="operacao" value="cadastrar">
				<div class ="form-group">
					<input class ="btn btn-success" type="submit" value="Salvar">
				</div>
				
			
		</form>
		   

		<a href="index.php">VOLTAR</a>

		<?php
			include 'footer.php';
		?>
	
</div>
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>