<?php require_once 'database.php';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE user SET auth = 0 WHERE ID = 0";
$q = $pdo->prepare($sql);
$q->execute();
$sql = "UPDATE statusled SET Stat = 0 WHERE ID = 0";
$q = $pdo->prepare($sql);
$q->execute();
Database::disconnect();
header("location: index.php");
