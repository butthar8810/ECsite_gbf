<?php
session_start();
$mail = $_POST['mail'];
$username = "root";
$password = "spiral8810";

try {
    $pdo = new PDO('mysql:charset=UTF8;dbname=ecsite_cystore;host=localhost', $username, $password);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$sql = "SELECT * FROM users WHERE mail = :mail";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();
//指定したハッシュがパスワードにマッチしているかチェック
if (password_verify($_POST['pass'], $member['password'])) {
    //DBのユーザー情報をセッションに保存
    $_SESSION['id'] = $member['id'];
    $_SESSION['username'] = $member['username'];
    header("Location: /ECsite_gbf/");
} else {
    header("Location: /ECsite_gbf/auth/login.php");
}

?>
