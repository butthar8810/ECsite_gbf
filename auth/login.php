<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ECsite_gbf/css/style.css">
    <link rel="stylesheet" href="/ECsite_gbf/css/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.js "></script>
    
    <link href=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.css " rel="stylesheet">
    
    <title>ログインページ</title>
</head>
<body>
    <?php include('../common/header.php'); ?>
    <div class="main">
        <div class="login-main">
            <div class="page-root-form">
                <p class="page-root"><a href="/ECsite_gbf/">CyStore(サイストア)トップ</a> > ログイン</p>
            </div>
            <div class="login-main-title">
                <div class="title-form">
                    <h2 class="title">Login</h2>
                    <h3 class="sub-title">ログイン</h3>
                </div>
            </div>
            <div class="login-forms">
                <div class="login-form">
                    <h1 class="title">すでに会員の方はこちら</h1>
                    <hr class="line">
                    <p class="detail">
                        メールアドレスをお持ちの方は、こちらからログインを行ってください。<br>
                        <span>
                            2024年12月03日以前にCyStoreもしくは旧ウマ娘 プリティーダービー 公式ストアにて会員登録済みの方は、
                            初めてログインする際に「パスワードをお忘れの方」からパスワードの再設定が必要です。
                        </span>
                    </p>
                    <form class="login-input-form" action="/ECsite_gbf/auth/authentication.php" method="post">
                        <div class="mail-input">
                            <p>メールアドレス</p>
                            <input type="text" name="mail" required>
                        </div>
                        <div class="pass-input">
                            <p>パスワード</p>
                            <input type="password" name="pass" required>
                        </div>
                        <div class="remember-mail">
                            <input type="checkbox" name="remember" value="mail">
                            <span class="remember-mail-text">メールアドレスを記憶する</span>
                        </div>
                        <input class="login-btn" type="submit" value="ログインする">
                    </form>
                </div>

                <div class="signup-form">
                    <h1 class="title">まだ会員ではない方はこちら</h1>
                    <hr class="line">
                    <p class="detail">
                        会員登録がお済みで無い方は、こちらから登録をお願いいたします。
                    </p>
                    <div class="signup-btn">
                        <a href="/ECsite_gbf/auth/signup.php">新規会員登録</a>
                    </div>
                    <h1 class="title">ソーシャルアカウントでログイン</h1>
                    <hr class="line">
                    
                    <div class="line-login-btn">
                        <a href="/ECsite_gbf/auth/signup.php">LINEでログイン</a>
                    </div>
                    <p class="line-login-text">※LINE連携時に友だち追加します</p>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('../common/footer.php'); ?>
</body>
</html>