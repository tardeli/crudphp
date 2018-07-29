

	<?php
		include 'conexao.php';
		$codigo =  isset($_GET['codigo']) ? $_GET['codigo'] : '' ;
		$nome =  isset($_GET['nome']) ? $_GET['nome'] : '' ;
		$cpf =  isset($_GET['cpf']) ? $_GET['cpf'] : '' ;


		$operacao =  isset($_GET['operacao']) ? $_GET['operacao'] : '' ;


		if($codigo == null && $operacao == 'cadastrar' ){
			$sql = "INSERT INTO cliente (nome, cpf)
			VALUES ('$nome', '$cpf')";

			if ($conn->query($sql) === TRUE) {
			    //echo "New record created successfully";
			    header('Location: index.php');
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

			
		}else if($codigo > 0 && $operacao == 'editar'){
			$sql = "UPDATE cliente SET nome='$nome', cpf='$cpf' WHERE codigo='$codigo'";

			if ($conn->query($sql) === TRUE) {
			    //echo "Record updated successfully";
			    header('Location: index.php');
			    
			} else {
			    echo "Error updating record: " . $conn->error;
			}

			$conn->close();

		}else if($codigo > 0 && $operacao == 'excluir'){
			$sql = "DELETE FROM cliente WHERE codigo='$codigo'";

			if ($conn->query($sql) === TRUE) {
			    //echo "Record deleted successfully";
			    header('Location: index.php');
			} else {
			    //echo "Error deleting record: " . $conn->error;
			}

			$conn->close();
		}

		
	?>

	