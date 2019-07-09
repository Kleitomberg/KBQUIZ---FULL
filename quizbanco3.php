
  <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kbquiz";

        $_alter1 = $_POST["alt1"];
		$_alter2 = $_POST["alt2"];
        $_alter3 = $_POST["alt3"];
        $_alter4 = $_POST["alt4"];
        $_opcao = $_POST["opcao"];
        $_ppergunta = $_POST["pergunta"];
        $_number = $_POST["numerx"];
// Cria conexão

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Envia comando para inclusão
$sql = "INSERT INTO kbquiz.Perguntas (numero,pergunta,alternativa1,alternativa2,alternativa3,alternativa4,opcao) VALUES  ('$_number', '$_ppergunta', '$_alter1', '$_alter2', '$_alter3', '$_alter4', '$_opcao')";
if ($conn->query($sql) === TRUE) {
    header ('Location: cadastrarP4.php');

    }else{
        header('Location: cadastrarP3.php');
    }

    /*
    include 'funcConecBanc.php';
    $conn = conecBanc();
    
		$_alter1 = $_POST["alt1"];
		$_alter2 = $_POST["alt2"];
        $_alter3 = $_POST["alt3"];
        $_alter4 = $_POST["alt4"];
        $_opcao = $_POST["opcao"];
        $_ppergunta = $_POST["pergunta"];

		 
		 

		conecBanc(); 
			
		// Envia comando para inclusão
			$sql = "INSERT INTO kbquiz.Perguntas (pergunta,alternativa1,alternativa2,alternativa3,alternativa4,opcao) VALUES  ('$_ppergunta', '$_alter1', '$_alter2', '$_alter3', '$_alter4', '$_opcao')";
    */
            ?>