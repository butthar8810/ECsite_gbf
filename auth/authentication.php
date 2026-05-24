<?php
session_start();
date_default_timezone_set("Asia/Tokyo");
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
    $current_date = date("Y-m-d H:i:s");
    $_SESSION['loginDate'] = $current_date;
    $_SESSION['lastLoginDate'] = $member['loginDate'];

    $sql = "UPDATE users SET loginDate = :loginDate, lastLoginDate = :lastLoginDate WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':loginDate', $_SESSION['loginDate']);
    $stmt->bindValue(':lastLoginDate', $_SESSION['lastLoginDate']);
    $stmt->bindValue(':id', $_SESSION['id']);
    $stmt->execute();

    header("Location: /ECsite_gbf/");
} else {
    header("Location: /ECsite_gbf/auth/login.php");
}
?>
