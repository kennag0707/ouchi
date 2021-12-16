<?php
if(isset($_POST['user'])) {
$dsn='mysql:dbname=ouchi;charset=utf8';
$user='ouchi';
$password='pass';
$dbh = new PDO($dsn,$user,$password);
$stmt = $dbh->prepare("INSERT INTO users VALUES(:user,:password)");
$stmt->bindParam(':user', $_POST['user']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->execute();
}
?>