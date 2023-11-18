<?php

    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );

    $userId = 1;

    $sql = "SELECT a.nome artista, m.nome AS musica_favorita
        FROM usuario u
        INNER JOIN musicaXusuario mxu ON u.id = mxu.idUsuario
        INNER JOIN musica m ON mxu.idMusica = m.id
        INNER JOIN artista a ON a.id = m.idArtista
        WHERE u.id = :userId
        ORDER BY a.nome, m.nome ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($usuario);
    } else {
        echo json_encode(["error" => "Nenhuma música encontrada!"]);
    }
    
?>