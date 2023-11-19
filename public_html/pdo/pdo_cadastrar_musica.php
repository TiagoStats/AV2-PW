<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$dataLancamento = $_POST['dataLancamento'];
	$duracao = $_POST['duracao'];
	$idArtista = $_POST['idArtista'];
	$idGenero = $_POST['idGenero'];
	$nome = $_POST['nome'];
	$link = $_POST['link'];
	
	$sql = "INSERT INTO musica (dataLancamento, duracao, idArtista, idGenero, nome, link) VALUES ('$dataLancamento', $duracao, $idArtista, $idGenero, '$nome', '$link')";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao cadastrar música!";
	} else {
	    header("Location: /cadastros/cadastrar_musica_artista_genero.html");
	    die();
	}
    
    
?>

