<?php

include '../db/conexao.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $numero = htmlspecialchars($_POST['bus-number']);
    $rota = htmlspecialchars($_POST['bus-route']);
    $capacidade = htmlspecialchars($_POST['bus-capacity']);
    $motorista = htmlspecialchars($_POST['bus-driver']);

   
    $sql = "INSERT INTO onibus (n_onibus, rota, capacidade, nome_motorista) VALUES (?, ?, ?, ?)";

  
    if ($stmt = $conn->prepare($sql)) {
       
        $stmt->bind_param("isis", $numero, $rota, $capacidade, $motorista);

       
        if ($stmt->execute()) {
            
            echo "Ônibus cadastrado com sucesso!";
        } else {
         
            echo "Erro ao cadastrar o ônibus: " . $stmt->error;
        }

    
        $stmt->close();
    } else {
        echo "Erro na preparação da query: " . $conn->error;
    }

  
    $conn->close();
} else {
    echo "Nenhum dado foi enviado.";
}
