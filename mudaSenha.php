<!DOCTYPE html>
<html>
  <head>
    <title>Esqueci a senha - KBQUIZ</title>
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
			  <?php include 'cabecl.php'; ?>
				</header>
		
		<!-- Conteudo/Login-->
		<section class="corpo">
		<center>
	<div class="remember">
			<form  action="alteraSS.php" id="newss" method="post">
			<fieldset class="fildset">
			<legend> Recupere sua senha </legend> 
			
			<hr>
            <?php
            session_start();
            $qualquer = $_SESSION ['email'];
            $_SESSION ['_email'] =  $qualquer; 
            ?>
				
			<p class="Insira">Nova Senha:</p><br><br>
			<input type="password" id="passwd" name='novaSS' class="novapass" placeholder="Insira sua nova senha." required >
			
		  <button type='submit' id="recuperr" class="btn" type="button">
							  
								 
									<p class="re">Recuperar</p>
									
								</button>
		
			</form>
			
			</div>
			</fieldset>
				</center>
			</section>
			  <!--RODAPÉ-->
			  <footer class="roda">
			 <?php include 'roda.php'; ?>
			  </footer>
		  </form>
	
	   
  
  </body>
</html>