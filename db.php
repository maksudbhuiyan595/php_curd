<?php
$host = 'localhost';
$db = 'crud_db';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		return $pdo;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>