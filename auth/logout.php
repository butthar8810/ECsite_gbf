<?php
session_start();
// _SESSION変数の削除
$_SESSION = array();
// セッションの破棄
session_destroy();
// ホーム画面にリダイレクト
header("Location: /ECsite_gbf/");
?>
