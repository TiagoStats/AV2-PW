<?php
    
    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
    
    $statement = $pdo->query("SELECT musica.nome nome_musica, musica.id id_musica, musica.duracao, artista.nome nome_artista, genero.nome nome_genero, musica.link FROM musica
                                    INNER JOIN artista ON musica.idArtista = artista.id
                                    INNER JOIN genero ON musica.idGenero = genero.id ORDER BY musica.duracao DESC");
        
    $result = $statement->fetchAll();
        
    header('Content-Type: application/json');
    
    echo json_encode($result);

?>
