<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kbquiz";

    
        $_marc1 = $_POST['marcada'];
// Cria conexão

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Envia comando para inclusão
$sql = "UPDATE kbquiz.Perguntas SET  marcada='$_marc1' where numero = '1'";
if ($conn->query($sql) === TRUE) {
    header ('Location: TELA 4 - PERGUNTA 2.php');

    }else{
        header('Location: TELA 3 - PERGUNTA 1.php');
    }

            ?>