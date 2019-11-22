<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_com_bd', 'root', 'toor');
$sql = $pdo->prepare("SELECT * FROM `carros` ORDER BY nome ASC LIMIT 2");
$sql->execute();
$carros = $sql->fetchAll();
foreach ($carros as $key => $value) {
    echo $value['nome'];
    echo '<hr>';
}
