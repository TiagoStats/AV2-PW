<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$idUsuario = $_POST['idUsuario'];
	
	$sql = "INSERT INTO usuarioXusuario (idUsuario1, idUsuario2) VALUES (1, $idUsuario)";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao favoritar amigo!";
	} else {
	    header("Location: /cadastros/perfil.html");
	    die();
	}
    
    
?>

