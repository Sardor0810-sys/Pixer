<?php

declare(strict_types=1);
 
ini_set('display_errors', '1');
error_reporting(E_ALL);

$host = 'localhost';
$user = 'root' ;
$password = '';
$dbName = 'project';

$dsn = "mysql:dbname=$dbName;host=$host";

$pdo = new PDO($dsn, $user, $password);

$pdoStatement = $pdo->prepare("SELECT * FROM `user`");

if( !$pdoStatement->execute()) {
	print "Qanaqadir xatolik yuz berdi!" ;
	exit;
}
while($row = $pdoStatement->fetch()) { 
    print "user: " . $row['name'] . '<br>' . "Message: " . $row['message'] . '<br><br>' ;
}
?>