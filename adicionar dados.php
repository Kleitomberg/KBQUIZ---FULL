﻿
	<?php
		$_eemail = $_POST["email"];
		$_ssenha = $_POST["senha"];
		$_nnome = $_POST["nome"];
		$_ccpf = $_POST["cpf"];

		 
		include 'funcConecBanc.php';
				$conn = conecBanc(); 

		conecBanc(); 
			
		// Envia comando para inclusão
			$sql = "INSERT INTO kbquiz.cadastro (nome,cpf,email,senha) VALUES  ('$_nnome', '', '$_eemail', '$_ssenha')";
			
			if ($conn->query($sql) === TRUE) {
			header ('Location: TELA 1 - LOGIN.php');

			}else{
				header('Location: TELA 2 - CADASTRO.php');
			}
	?>