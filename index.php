<?php
	date_default_timezone_set('American/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=php_com_bd','root','toor');

	if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$momento_geristro = date('Y-m-d H:i:s');

		$sql = $pdo->prepare("INSERT INTO `cliente` VALUES(null,?,?,?)");

		$sql->execute(array($nome, $sobrenome, $momento_geristro));

		echo "Cliente inserido com sucesso!";
	}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro no Banco de Dados</title>
</head>
<body>

	<form method="post">
		<input type="text" name="nome" required/>
		<input type="text" name="sobrenome" required />
		<input type="submit" name="acao" value="Enviar" />
	</form>

</body>
</html>