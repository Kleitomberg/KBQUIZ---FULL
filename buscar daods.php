	<?php
		$_eemail = $_POST["email"];
		$_ssenha = $_POST["senha"];
		
			

		
		include 'funcConecBanc.php';
		
		$conn = conecBanc(); 
		
		$sql = "SELECT * FROM kbquiz.cadastro where email = '$_eemail' and senha = '$_ssenha'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			session_start();
			$_SESSION ['email'] = $_POST['email'];
			header('Location: TELA 0 - KBQUIZ.php');
		}else{
			header ('Location: TELA 1 - LOGIN_2.php');
		}
		$conn->close();
	
	

		
	?>
	
	