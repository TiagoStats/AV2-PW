<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$nome = $_POST['nome'];
	
	$sql = "INSERT INTO genero (nome) VALUES ('$nome')";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao cadastrar gênero!";
	} else {
	    header("Location: /cadastros/cadastrar_genero.html");
	    die();
	}
    
    
?>

