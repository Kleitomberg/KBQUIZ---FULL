﻿<!DOCTYPE html>
<html>
  <head>
    <title>Login - KBQUIZ</title>
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
	 <?php include 'cabec.php'; ?>
	 <li class="navegacao" id="lo">  <a href="TELA 1 - LOGIN.php"> JOGAR </a> </li> 
	 <li class="navegacao" id="ca">  <a href="TELA 1 - LOGIN.php"> CRIAR QUIZ </a> </li> 
	  		</header>
		
		<!-- Conteudo/Login-->
		<section class="corpo">
	
			  <form  action="buscar daods.php"  method="post">
			  	<center>
			  <fieldset class="fildset">
			  <legend id="tl"> LOGIN </legend>
			  <div id="login">

			  E-mail:<br>
			  <input type="email" name="email" id="email" class="borders" placeholder="Digite Seu E-mail" required > <br><br>
			  
			   Senha:<br>
			  <input type="password" name="senha" id="senha" class="borders"  placeholder="Digite Sua Senha" required > <br>
			  <a class="esqueceu" href="TELA 00 - SENHA.php"> Esqueceu a Senha?</a><br><br>
			
			  <div id="divb">
			  
				   
					  <button id="adentrar" class="btn" type="submit">
					  <span class="iconeentrar">
						  <i id="icones" class="fas fa-sign-in-alt">
						  </i> </span>
						  &nbsp; 
							<span class="nameentrar">Entrar</span>
							
						</button>
				
			</div>

			  <a id="newcont " href="TELA 2 - CADASTRO.php"> <span class="newC">Criar uma conta </span></a>
			  </fieldset>
			    </center>
			  </div>
			</section>
			  <!--RODAPÉ-->
			  <footer class="roda">
				<?php include 'roda.php'; ?>
			  </footer>
		  </form>
	
	   
  
  </body>
</html>