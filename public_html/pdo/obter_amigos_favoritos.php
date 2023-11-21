<?php

    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );

    $sql = "SELECT * FROM usuario WHERE id IN (SELECT idUsuario1 FROM usuarioXusuario WHERE idUsuario1 IN (SELECT idUsuario1 FROM usuarioXusuario WHERE idUsuario2 = 1)) OR id IN (SELECT idUsuario2 FROM usuarioXusuario WHERE idUsuario2 IN (SELECT idUsuario2 FROM usuarioXusuario WHERE idUsuario1 = 1)) ORDER BY NOME;";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($usuario);
    } else {
        echo json_encode(["error" => "Nenhum amigo encontrado!"]);
    }
    
?>