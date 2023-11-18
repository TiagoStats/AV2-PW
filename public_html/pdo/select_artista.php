<?php
    
    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
    
    $statement = $pdo->query("SELECT * FROM artista");
        
    $result = $statement->fetchAll();
        
    header('Content-Type: application/json');
    
    echo json_encode($result);

?>

