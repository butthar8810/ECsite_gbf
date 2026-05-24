<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: /ECsite_gbf/auth/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ECsite_gbf/css/style.css">
    <link rel="stylesheet" href="/ECsite_gbf/css/mypage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <script src=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.js "></script>
    
    <link href=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.css " rel="stylesheet">
    
    <title>マイページ(笑)</title>
</head>
<body>
    <?php include('../common/header.php'); ?>
    <div class="main">
        <div class="mypage-main">
            <div class="page-root-form">
                <p class="page-root"><a href="/ECsite_gbf/">CyStore(サイストア)トップ</a> > マイページ</p>
            </div>
            <div class="mypage-main-title">
                <div class="title-form">
                    <h2 class="title">My Page</h2>
                    <h3 class="sub-title">マイページ</h3>
                </div>
            </div>
            <div class="mypage-info-forms">
                <div class="user-info-form">
                    <div class="user-info">
                        <p class="username"><?php echo $_SESSION['username'] ?><span>様</span></p>
                        <p class="user-id">ユーザーID : <?php echo $_SESSION['id'] ?></p>
                    </div>
                    <div class="login-info">
                        <p class="login-info-title"><i class="fa-solid fa-clock"></i> 前回ログイン日時</p>
                        <p class="last-login-date">
                            <?php echo date('Y年m月d日 H時i分', strtotime($_SESSION['lastLoginDate'])); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="logout-btn-form">
                <a class="logout-btn" href="/ECsite_gbf/auth/logout.php">ログアウト</a>
            </div>
        </div>
    </div>
    <?php include('../common/footer.php'); ?>
</body>
</html>