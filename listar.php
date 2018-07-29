<?php
include 'conexao.php';

$sql = "SELECT codigo, nome, cpf FROM cliente";
$result = $conn->query($sql);

?>

<html>
<head>
	<title>Controle de Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<div class = "container">	

	<?php
		if ($result->num_rows > 0) { 
			// output data of each row
			?>
	    
		    

			<table class="table table-hover">
		    		<thead>
		    			<tr>
					      	<th>Código</th>
					      	<th>Nome</th>
					      	<th>Cpf</th>
					      	<th>Editar</th>
					      	<th>Excluir</th>
				      	</tr>
		    		</thead>

		    		<tbody>

		    <?php    while($row = $result->fetch_assoc()) { ?>			

				      <tr>
				      	<td><?php echo $row["codigo"]?></td>
				      	<td><?php echo $row["nome"]?></td>
				      	<td><?php echo $row["cpf"]?></td>
				      	<td><a class="btn btn-sm btn-primary" href="editar.php?codigo=<?php echo $row["codigo"];?>">EDITAR</a></td>
				      	<td><a class="btn btn-sm btn-danger" href="daocliente.php?codigo=<?php echo $row["codigo"];?>&operacao=excluir" onclick ="return confirm('Tem certeza que desaja exluir este registro?')">EXCLUIR</a></td>

				      </tr>
			  		</tbody>

		<?php } ?>

		</table>
		<?php
		} else {
		    echo "0 results";
		}
		$conn->close();

	?>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</div>
	
</body>

</html>