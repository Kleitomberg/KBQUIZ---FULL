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
  
  <script>

function vazio() 
{
    var check = document.getElementsByName("marcada"); 
	if(check[0].checked == false && check[1].checked == false && check[2].checked == false && check[3].checked == false ){
		alert("Nenhuma opção foi marcada, por favor marque uma opção");
			event.preventDefault();
            
        } else{
			validar();
			}
    }

function validar() {

	var vetor = document.getElementsByName('marcada');
	var opcaoEscolhida; 
	if(vetor[0].checked){
		opcaoEscolhida = "a";
	}else if (vetor[1].checked){
		opcaoEscolhida = "b";
	}else if (vetor[2].checked){
		opcaoEscolhida = "c";
	}else if (vetor[3].checked){
		opcaoEscolhida = "d";
	}
	
	var opcaoCorreta = document.getElementById('opcao-correta').value;
	var acertos = 0;

	//alert("VOCÊ MARCOU A LETRA: " + opcaoEscolhida);
	//alert("A OPÇÃO CORRETA ERA:  " + opcaoCorreta);
	if(opcaoEscolhida == opcaoCorreta) {
		var acertos = acertos + 1;
		alert('Acertô, mizeravi');
		}else{
			alert('Erouuu');	
		}
}
</script>

<?php /*
	session_start();
	$ac = $_GET["acertos"];
	$_SESSION['ac']= $_SESSION['ac'] + $ac;
	$teste = $_SESSION['ac'];
	*/
	?>
	  
	   <!--Cabeçalho-->
	  <header id="cabe">
	   <?php include 'cabecs.php'; ?>
		</header>
		
		<section class="corpo">
			 <fieldset class="borders marg">

			 <?php
	//chamafuncao
		include 'funcConecBanc.php';
		$conn = conecBanc(); 
		conecBanc();

$sql= "SELECT * FROM kbquiz.perguntas where  numero = '1'";
$result= $conn->query($sql);
if($result->num_rows> 0) {
	
	$contador =0;
	while($row= $result->fetch_assoc()) {
		$pergunt = $row["pergunta"];
		$alt1 = $row["alternativa1"];
		$alt2 = $row["alternativa2"];
		$alt3 = $row["alternativa3"];
		$alt4 = $row["alternativa4"];
		$opc = $row["opcao"];
		$numr = $row["numero"];
		
		$contador++;
		if($contador ==7){
			break;
		}

		echo"
		

		<div id='question'>
<p class='perguntas'>$numr ° &nbsp; $pergunt</p>

</div>
<div id='resposta'>
<form  method='post' id='alternativas' action='marcadas.php'>
A)
<input type='radio' class='caixinha' name='marcada' value='a'> $alt1</br>
B)
<input type='radio' class='caixinha' name='marcada' value='b'> $alt2 </br>
C)
<input type='radio' class='caixinha' name='marcada' value='c'> $alt3 </br>
D)
<input type='radio' class='caixinha' name='marcada' value='d'> $alt4 </br> </br>

<input hidden type='text' name='opcao-correta' id='opcao-correta' value='$opc'><br><br>

</div>




";
/*
if ($marcada == $opc){
	$marcada = $_POST['op'];
 
 $ac = $ac + 1 ;

}

*/
}

}
$conn->close();
echo "</center>";
?>

<div id="botões">

<BUTTON class="btn sair bp1" > 
<a  class="linkerk pp1"  href="TELA 0 - KBQUIZ.php"> Sair</a>
</BUTTON>

<BUTTON type='submit' class="btn NovoQuiz1 bp2" onclick='vazio()'> 
<p class="addP pp2"> Proxima Pergunta<p>
</BUTTON>
</form>
</div>	
</fieldset>
		
		</section >
		<!--RODAPÉ-->
			  <footer class="roda">
		<?php include 'roda.php'; ?>
			  </footer>		
		
		</body>
		</html>
		
		
		
		
		