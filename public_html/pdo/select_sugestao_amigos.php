<?php
    
    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
    
    $statement = $pdo->query("SELECT * FROM usuario WHERE id IN (SELECT idUsuario FROM musicaXusuario WHERE idMusica IN (SELECT idMusica FROM musicaXusuario WHERE idUsuario = 1) AND idUsuario <> 1) AND id NOT IN (SELECT idUsuario1 FROM usuarioXusuario WHERE idUsuario2 = 1) AND id NOT IN (SELECT idUsuario2 FROM usuarioXusuario WHERE idUsuario1 = 1);");
        
    $result = $statement->fetchAll();
        
    header('Content-Type: application/json');
    
    echo json_encode($result);

?>
