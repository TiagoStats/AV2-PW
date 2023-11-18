<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$idUsuario = $_POST['idUsuario'];
	$idMusica = $_POST['idMusica'];
	
	$sql = "INSERT INTO musicaXusuario (idUsuario, idMusica) VALUES ($idUsuario, $idMusica)";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao favoritar música!";
	} else {
	    header("Location: /cadastros/favoritar_musica.html");
	    die();
	}
    
    
?>

