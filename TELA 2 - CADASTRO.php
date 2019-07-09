<!DOCTYPE html>
	<html>
	  <head>
		<title>Cadastro - KBQUIZ </title>
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
	  <script>
			function validarSenha()
			{
				var chave = document.getElementById("senha").value.length;
				if(chave<8){
				document.getElementById("msg").innerHTML= "As senhas devem ter no mínimo 8 caracteres";	
				}else{
					document.getElementById("msg").innerHTML= "";
					}
			}
		
			function validarNome()
			{
				var texto = document.getElementById("nome").value.length;
				if(texto==""){
				document.getElementById("msg").innerHTML= "Nome não pode está vázio";	
				}else{
					document.getElementById("msg").innerHTML= "";
				}
			}
	  
	  </script>
		
		  <!--Cabeçalho-->
			 <header id="cabe">
			  <?php include 'cabecl.php'; ?>
				</header>
		  
		  <!-- Conteudo/Cadastro-->
		 <section class="corpo">
			<p class="camposcads">
					  <form  action="adicionar dados.php" id="formulario" method="post">
						<center>
					  <fieldset class="fildset fieldcadas">
					  <legend id="tl"> CADASTRO </legend>
					  <div id="casastro">
					  <p id="msg">      &nbsp;&nbsp;         </p>
					  Nome:
					  <input type="text" id="nome" name="nome" class="borders" placeholder="Digite Seu nome" onblur="validarNome()" required > <br><br>
					  E-mail:
					  <input type="email" id="email" name="email" class="borders" placeholder="Digite Seu E-mail" required > <br><br>
					   Senha:
					  <input type="password" id="senha" name="senha" class="borders"  placeholder="Digite Sua Senha" onblur="validarSenha()" required > <br>
			</p>
					  <div id="divb">
						   <a href="TELA 1 - LOGIN.php">
							  <button id="casds" class="btn" type="submit" >
							  <span class="iconecadas">
								  <i id="icones" class="fa fa-user-plus">
								  </i> </span>
								 
									<span class="namecadas">Cadastrar</span>
									
								</button>
						  </a>
						<p class="ja">  Já tem uma conta? <a  href="TELA 1 - LOGIN.php	"><span class="en">Entre<span></a> </p>
					</div>
					  
			
					  </fieldset>
						</center>
					  </div>
					</section>
		</form>
		 <!--RODAPÉ-->
					  <footer class="roda">
		
				<?php include 'roda.php'; ?>
			
					  </footer> 
		   
	  </body>
	  
	  
	</html>