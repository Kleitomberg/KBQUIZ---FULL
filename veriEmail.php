<?php
		$_eemail = $_POST["Ema"];
		$_ssenha = $_POST["senha"];
		
			

		
		include 'funcConecBanc.php';
		
		$conn = conecBanc(); 
		
		$sql = "SELECT * FROM kbquiz.cadastro where email = '$_eemail'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			session_start();
			$_SESSION ['email'] = $_POST['Ema'];
			header('Location: mudaSenha.php');
		}else{
			header ('Location: TELA 00 - SENHA.php');
		}
		$conn->close();
	
	

		
	?>
	
	