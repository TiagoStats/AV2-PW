<?php

    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );

    $userId = 1;

    $sql = "SELECT u.nome, u.dataNascimento, u.email, u.telefone, u.cidade, u.estado, u.pais
        FROM usuario u WHERE u.id = :userId";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($usuario);
    } else {
        echo json_encode(["error" => "Usuário não encontrado"]);
    }
    
?>