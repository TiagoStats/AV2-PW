<?php
    
    $pdo = new PDO( 'mysql:host=localhost;dbname=id21473677_db', 'id21473677_root', 'Root100%' );
    
    $email = $_POST['email'];
	$senha = $_POST['senha'];
    
    $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->execute();
	
	if($stmt->rowCount() <= 0 ){
		header("Location: /cadastros/login.html");
	    die();
	} else {
	    header("Location: /cadastros/perfil.html");
	    die();
	}

?>

