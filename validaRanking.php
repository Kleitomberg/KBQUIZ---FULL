<!DOCTYPE html>
<html>
  <head>
    <title>KBQUIZ - RESULTADO</title>
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
				<section class="corpo">
		<div id="RESULT">
				  <h2 id="h3">Meu Resultado </h2>
<?php 
session_start();

$eemail = $_SESSION ['email'];


//$_SESSION ['percentual'] = $percentual; 
?>

<?php

include 'funcConecBanc.php';
		$conn = conecBanc(); 
        conecBanc();
       

$sql= "SELECT * FROM kbquiz.perguntas where numero = '1 ' " ;
$result= $conn->query($sql);
if($result->num_rows> 0) {
    echo " 
    <form action='acertos.php' method='post' id='alternativas'>
    <table id='customers'>
      <tr>
      <th> Acertos </th>
		<th>Percentual</th>
		<th class='campe'>Email</th>
		<th class='campe'>Data</th>
	  </tr>";
	$contador =0;
	while($row= $result->fetch_assoc()) {
        $p1 = $row['pergunta'];
        $m1 = $row["marcada"];
		$p1alt1 = $row["alternativa1"];
		$p1alt2 = $row["alternativa2"];
		$p1alt3 = $row["alternativa3"];
		$p1alt4 = $row["alternativa4"];
		$opc1 = $row["opcao"];
		$numr1 = $row["numero"];

;		$contador++;
		if($contador ==6){
        break;
        
        }}}
        $sql= "SELECT * FROM kbquiz.perguntas where numero = '2 ' " ;
$result= $conn->query($sql);
if($result->num_rows> 0) {
	$contador =0;
	while($row= $result->fetch_assoc()) {
        $p2 = $row['pergunta'];
        $m2 = $row["marcada"];
		$p2alt1 = $row["alternativa1"];
		$p2alt2 = $row["alternativa2"];
		$p2alt3 = $row["alternativa3"];
		$p2alt4 = $row["alternativa4"];
		$opc2 = $row["opcao"];
		$numr2 = $row["numero"];

;		$contador++;
		if($contador ==6){
        break;
        
        }}}

        $sql= "SELECT * FROM kbquiz.perguntas where numero = '3 ' " ;
$result= $conn->query($sql);
if($result->num_rows> 0) {
	$contador =0;
	while($row= $result->fetch_assoc()) {
        $p3 = $row['pergunta'];
        $m3 = $row["marcada"];
		$p3alt1 = $row["alternativa1"];
		$p3alt2 = $row["alternativa2"];
		$p3alt3 = $row["alternativa3"];
		$p3alt4 = $row["alternativa4"];
		$opc3 = $row["opcao"];
		$numr3 = $row["numero"];

;		$contador++;
		if($contador ==6){
        break;
        
        }}}

        $sql= "SELECT * FROM kbquiz.perguntas where numero = '4 ' " ;
$result= $conn->query($sql);
if($result->num_rows> 0) {
	$contador =0;
	while($row= $result->fetch_assoc()) {
        $p4 = $row['pergunta'];
        $m4 = $row["marcada"];
		$p4alt1 = $row["alternativa1"];
		$p4alt2 = $row["alternativa2"];
		$p4alt3 = $row["alternativa3"];
		$p4alt4 = $row["alternativa4"];
		$opc4 = $row["opcao"];
		$numr4 = $row["numero"];

;		$contador++;
		if($contador ==6){
        break;
        
        }}}

        $sql= "SELECT * FROM kbquiz.perguntas where numero = '5 ' " ;
$result= $conn->query($sql);
if($result->num_rows> 0) {
	$contador =0;
	while($row= $result->fetch_assoc()) {
        $p5 = $row['pergunta'];
        $m5 = $row["marcada"];
		$p5alt1 = $row["alternativa1"];
		$p5alt2 = $row["alternativa2"];
		$p5alt3 = $row["alternativa3"];
		$p5alt4 = $row["alternativa4"];
		$opc5 = $row["opcao"];
		$numr5 = $row["numero"];

;		$contador++;
		if($contador ==6){
        break;
        
        
        }}}



$conn->close();
echo "</center>";

$acertos = 0;
if ($m1 ==$opc1){
    $acertos = $acertos + 1;
}

if ($m2 ==$opc2){
    $acertos = $acertos + 1;
}

if ($m3 ==$opc3){
    $acertos = $acertos + 1;
}

if ($m4 ==$opc4){
    $acertos = $acertos + 1;
}

if ($m5 == $opc5){
    $acertos = $acertos + 1;
}

$atualData = date ("Y-m-d");
$percentual = ($acertos * 100) / 5;
$_SESSION ['acertos'] = $acertos;
$_SESSION ['data'] = $atualData;
echo "
	
    <tr>
            <td>$acertos</td> 
			<td>$percentual%</td> 
			<td>$eemail</td> 
			<td>$atualData </td>
		</tr>
        </form>
        "
    
       
?>
<BUTTON type='submit'class="btn NovoQuiz1 bp2 ver" > 
<p class="addP pp2"> Ver Ranking<p>
</BUTTON>
 
		
				  
				

				<img class="imgranking1 gif" src="med.png " >			 
				</div>
				</section>

<!--RODAPÉ-->
				  <footer class='roda newr'>
				 <?php include 'roda.php'; ?> 
				  </footer>
				  </body>
				  </html>

