<?php
		include 'conexao.php';

		$codigo =  isset($_GET['codigo']) ? $_GET['codigo'] : '' ;

		$sql = "SELECT codigo, nome, cpf FROM cliente where codigo = '$codigo'";
			$result = $conn->query($sql);

		    while($row = $result->fetch_assoc()) {
		    	
		    	$codigo = $row["codigo"];
			    $cpf = $row["cpf"];
			    $nome = $row["nome"];
			      	
			}

?>


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
		<h1>Edição de Cliente</h1>

		<form method="get" action="daocliente.php">
			
				<div class ="form-group">
					<label>Nome: </label>
					<input class="form-control" type="text" name="nome" value ="<?php echo $nome?>">
				</div>
				<div class ="form-group">
					<label>Cpf: </label>
					<input class="form-control" type="text" name="cpf" value ="<?php echo $cpf?>">
				</div>
				<input type="hidden" value="<?php echo $codigo?>" name="codigo">
				<input type="hidden" name="operacao" value="editar">
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