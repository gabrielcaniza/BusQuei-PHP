<?php

$servername = "localhost"; 
$username = "root";        
$password = "admin";    
$dbname = "onibus";  


$conn = new mysqli($servername, $username, $password, $dbname,3307);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida ao banco de dados: " . $dbname;


?>