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
$sql = "UPDATE kbquiz.Perguntas SET  marcada='$_marc1' where numero = '4'";
if ($conn->query($sql) === TRUE) {
    header ('Location: TELA 7 - PERGUNTA 5.php');

    }else{
        header('Location: TELA 6 - PERGUNTA 4.php');
    }

            ?>