<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$idUsuario = $_POST['idUsuario'];
	$idMusica = $_POST['idMusica'];
	$comentario = $_POST['comentario'];
	
	$sql = "INSERT INTO comentario (idUsuario, idMusica, comentario) VALUES ($idUsuario, $idMusica, '$comentario')";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao cadastrar comentário!";
	} else {
	    header("Location: /cadastros/cadastrar_comentario.html");
	    die();
	}
    
    
?>

