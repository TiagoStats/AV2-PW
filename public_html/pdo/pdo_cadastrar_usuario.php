<?php

	$pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$pais = $_POST['pais'];
	$dataNascimento = $_POST['dataNascimento'];
	
	$telefone = intval($telefone);
	
	$sql = "INSERT INTO usuario (nome, email, senha, telefone, cidade, estado, pais, dataNascimento) 
	        VALUES ('$nome', '$email','$senha', $telefone, '$cidade', '$estado', '$pais', '$dataNascimento')";
	
	$count = $pdo->exec( $sql );
	
	if( $count <= 0 ){
		echo "Ooops! Erro ao cadastrar usuário!";
	} else {
	    header("Location: /cadastros/cadastrar_usuario.html");
	    die();
	}
    
    
?>

