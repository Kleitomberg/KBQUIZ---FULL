    <?php
        session_start();
		$_eemail = $_SESSION ['email'];
        $_acert = $_SESSION ['acertos'];
		$_erros = 5 - $_acert;
		$_date = $_SESSION ['data'];
 			
        
		 
		include 'funcConecBanc.php';
				$conn = conecBanc(); 

		conecBanc(); 
			
		// Envia comando para inclusão
            $sql = "INSERT INTO kbquiz.ranking (email,acertos,erros,dataa) VALUES  ('$_eemail', '$_acert', '$_erros' ,'$_date')";
        
			
			if ($conn->query($sql) === TRUE) {
			header ('Location: ranking.php');

			}else{
           header('Location: TELA 7 - PERGUNTA 5.php');
			}
	?>