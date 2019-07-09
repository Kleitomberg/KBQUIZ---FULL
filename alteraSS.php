<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kbquiz";
        $_newSS = $_POST['novaSS'];
        session_start();
        $_ehemail = $_SESSION ['_email'];

// Cria conexão

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Envia comando para inclusão
$sql = "UPDATE kbquiz.cadastro SET  senha= '$_newSS' where email = '$_ehemail'";
if ($conn->query($sql) === TRUE) {
    header ('Location: TELA 1 - LOGIN.php');

    }else{
        header('Location: mudaSenha.php');
    }

            ?>