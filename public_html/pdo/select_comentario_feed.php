<?php
    
    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
    
    $idMusica = $_POST["idMusica"];
    
    $sql = "SELECT comentario.comentario, usuario.nome, usuario.estado FROM comentario 
INNER JOIN usuario ON usuario.id = comentario.idUsuario WHERE comentario.idMusica = :idMusica";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idMusica', $idMusica, PDO::PARAM_INT);
    $stmt->execute();
        
    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    } else {
        echo json_encode(["error" => "Nenhum comentário encontrado."]);
    }

?>
