<?php
date_default_timezone_set("Asia/Tokyo");
//フォームからの値をそれぞれ変数に代入
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$username = "root";
$password = "spiral8810";
try {
    $pdo = new PDO('mysql:charset=UTF8;dbname=ecsite_cystore;host=localhost', $username, $password);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

//フォームに入力されたmailがすでに登録されていないかチェック
$sql = "SELECT * FROM users WHERE mail = :mail";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();
if ($member['mail'] === $mail) {
    $msg = '同じメールアドレスが存在します。';
    $link = '<a href="signup.php">戻る</a>';
} else {
    //登録されていなければinsert 
    $sql = "INSERT INTO users(username, mail, password, loginDate, lastLoginDate) VALUES (:username, :mail, :password, :loginDate, :lastLoginDate)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $name);
    $stmt->bindValue(':mail', $mail);
    $stmt->bindValue(':password', $pass);
    $current_date = date("Y-m-d H:i:s");
    $stmt->bindValue(':loginDate', $current_date);
    $stmt->bindValue(':lastLoginDate', $current_date);
    $stmt->execute();
    $msg = '会員登録が完了しました';

    header("Location: /ECsite_gbf/auth/login.php");
}
?>

