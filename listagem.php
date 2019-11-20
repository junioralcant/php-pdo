<?php	
	$pdo = new PDO('mysql:host=localhost;dbname=php_com_bd','root','toor');

	/*
	// Select de posts
	$sql = $pdo->prepare("SELECT * FROM posts");

	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		echo "Titulo:" .$value['titulo'] ;
		echo "<br/>";
		echo "Noticia:" .$value['conteudo'];
		echo "<hr/>";
	}
	*/

	// Select com relacionamento e renomeando o nome do id do post

	$sql = $pdo->prepare("SELECT `posts`.*, `categoria`.*, `posts`.`id` AS `posts_id`  FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id` = `categoria`.`id` ");

	$sql->execute();

	$info = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";
		print_r($info);
	echo "</pre>";
?>	