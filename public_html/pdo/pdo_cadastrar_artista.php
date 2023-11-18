<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$nome = $_POST['nome'];
	$idGenero = $_POST['idGenero'];
	
	$sql = "INSERT INTO artista (nome, idGenero) VALUES ('$nome', '$idGenero')";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao cadastrar artista!";
	} else {
	    header("Location: /cadastros/cadastrar_artista.html");
	    die();
	}
    
    
?>

