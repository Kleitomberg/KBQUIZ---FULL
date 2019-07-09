<!DOCTYPE html>
<html>
  <head>
    <title>CRIAR QUIZ - KBQUIZ </title>
   <meta charset="utf-8">
		<link rel="stylesheet" href="CSS TELA 1 - LOGIN.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Teste agora seus conhecimentos, KBQUIZ, seu jogo de perguntas e respostas " >
		<meta name="keyword" content="QUIZ,GAME, PERGUNTAS,RESPOSTAS">
		<meta name="author" content="Kleitombeg">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css﻿">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="icon" href="icon.png">
<meta name="viewport" content="width=device=width",initial-scale=2.0">
<meta name="viewport" content="width=500, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  
  
  <body>
 <!--Cabeçalho-->
	  <header id="cabe">
	   <?php include 'cabecs.php'; ?>
		</header>
  
  <!-- Conteudo/Cadastro-->
  <section >
  <div id="cadastro">

<form action="quizbanco4.php" id="formula" method="post">
	
<fieldset  class="fildset"> 
<legend> Cadastrar QUIZ </legend>
Pergunta:<input type="number" name="numerx" class="borders" id="nmbr">  &nbsp;
<input type="text" id="userc" class="borders Nquizz"  name="pergunta" placeholder="Insira a primeira pergunta" required>
</br></br>

<fieldset class="fildset">  
<legend>Alternativas:</legend>
<input type="radio" id="a" name="opcao" value="a" > <input type="text" id="a1"  class="borders"  name="alt1" placeholder="ALTERNATIVA A" required>  </br></br>
<input type="radio" id="b" name="opcao" value="b"> <input type="text" id="a2"  class="borders"  name="alt2" placeholder="ALTERNATIVA B" required> </br></br>
<input type="radio" id="c" name="opcao" value="c"> <input type="text" id="a3"  class="borders"  name="alt3" placeholder="ALTERNATIVA C" required> </br></br>	
<input type="radio" id="d" name="opcao" value="d">  <input type="text" id="a4"  class="borders"  name="alt4" placeholder="ALTERNATIVA D" required> </br>


</fieldset>
<BUTTON class="btn sair" > 
<a class="linkerk" href="cadastrarP3.php"> Voltar</a>
</BUTTON>

<BUTTON type="submit" class="btn NovoQuiz2" > 
<p class="addP">Proxima Pergunta<p>
</BUTTON>
</fieldset>

</form>

</div>
 
 </BR>
 <!-- P2-->
 


 </section> 
 <!--RODAPÉ-->
			  <footer class="roda">
			 <?php include 'roda_2.php'; ?> 
			  </footer> 
   
  </body>
  
  
</html>