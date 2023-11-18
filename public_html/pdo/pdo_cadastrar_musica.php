<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$dataLancamento = $_POST['dataLancamento'];
	$duracao = $_POST['duracao'];
	$idArtista = $_POST['idArtista'];
	$idGenero = $_POST['idGenero'];
	$nome = $_POST['nome'];
	
	$sql = "INSERT INTO musica (dataLancamento, duracao, idArtista, idGenero, nome) VALUES ('$dataLancamento', $duracao, $idArtista, $idGenero, '$nome')";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao cadastrar música!";
	} else {
	    header("Location: /cadastros/cadastrar_musica.html");
	    die();
	}
    
    
?>

