<!DOCTYPE html>
<html>
  <head>
    <title>KBQUIZ</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="CSS TELA 1 - LOGIN.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Teste agora seus conhecimentos, KBQUIZ, seu jogo de perguntas e respostas " >
		<meta name="keyword" content="QUIZ,GAME, PERGUNTAS,RESPOSTAS">
		<meta name="author" content="Kleitombeg">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css﻿">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="icon" href="icon.png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
  
  
  <!--Cabeçalho-->
	  <header id="cabe">
	   <?php include 'cabecs.php'; ?>
		</header>
  
  	<?php
	/*
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "kbquiz";
		
		
			// Cria a conexão
	$conn = new mysqli($servername, $username, $password);
	// Checa se tá tudo ok!
	if($conn->connect_error) {
		die("Conexaofalhou! " . $conn->connect_error);
	
	}
	return $conn;
	*/
	
		$_alter1 = $_POST["alternativa1"];
		$_alter2 = $_POST["alternativa2"];
        $_alter3 = $_POST["alternativa3"];
        $_alter4 = $_POST["alternativa4"];
        $_opcao  = $_POST["opcao"];
        $_ppergunta = $_POST["pergunta"];
		
	
		include 'funcConecBanc.php';
		
		$conn = conecBanc(); 
		
		$sql = "SELECT * FROM kbquiz.perguntas";
		$result = $conn->query($sql);
		if($result->num_rows> 0) {
			
		$contador =0;
	
	while($row= $result->fetch_assoc()) {
		$alter1 = $row["alternativa1"];
		$alter2 = $row["alternativa2"];
		$alter3 = $row["alternativa3"];
		$alter4 = $row["alternativa4"];
		$opcao = $row["opcao"];
		$ppergunta = $row["pergunta"];
		
		$contador++;
		if($contador ==5){
			break;
			
		echo "
		<section class='corpo'
			 <fieldset class='borders'>
		<div id='question'>	
<p class='perguntas'>('$ppergunta'); </p>

</div>
<div id='esposta' 
<form action='TELA 4 - PERGUNTA 2.php' method='post' id='alternativas'>
A)
<input type='radio' class='caixinha' name='op' value='Flamengo'> ('$alter1')</br>
B)
<input type='radio' class='caixinha' name='op' value='Santos'> ('$alter2' </br>
C)
<input type='radio'class='caixinha' name='op' value='Palmeiras' ('$alter3') </br>
D)
<input type='radio' class='caixinha' name='op' value='orinthians' ('$alter4') </br>
</div>
;"//fecha echo

}
$conn->close();		
	?>
	
<div id='botões'>

<BUTTON class='btn sair' > 
<a href='TELA 0 - KBQUIZ.php'> Sair</a>
</BUTTON>

<BUTTON class='btn NovoQuiz1' > 
<a href='TELA 4 - PERGUNTA 2.php'> Proxima Pergunta</a>
</BUTTON>
</form>
</div>
		
</fieldset>
		
		</section >
		<!--RODAPÉ-->
			  <footer class='roda'>
		<?php include 'roda.php'; ?>
			  </footer>
		  </form>
		
		
		</body>
		</html>
		
		
		
		
		


		