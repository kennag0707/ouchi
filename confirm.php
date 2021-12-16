<?php
if(isset($_POST['user'])) {
$dsn='mysql:dbname=ouchi;charset=utf8';
$user='ouchi';
$password='pass';
$dbh = new PDO($dsn,$user,$password);

$stmt = $dbh->prepare("SELECT FROM users WHERE userId=:user");
$stmt->bindParam(':user', $_POST['user']);
$stmt->execute();
if($rows = $stmt->fetch()) {
if($rows["password"] ==  $_POST['password']) {
    header('Location: home.html');
print "<p>ログイン成功</p>";
}else {
print "<p>ログイン失敗</p>";
}
}else {
print "<p>ログイン失敗</p>";
}
}
?>