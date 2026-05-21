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
    
    <title>会員新規登録ページ</title>
</head>
<body>
    <?php include('../common/header.php'); ?>
    <div class="main">
        <div class="register-main">
            <div class="page-root-form">
                <p class="page-root"><a href="/ECsite_gbf/">CyStore(サイストア)トップ</a> > 会員新規登録</p>
            </div>
            <div class="register-main-title">
                <div class="title-form">
                    <h2 class="title">Register</h2>
                    <h3 class="sub-title">新規会員登録</h3>
                </div>
                <p class="register-main-text">
                    「CyStore(サイストア)」をご利用いただくには会員登録が必要です。<br>
                    会員登録前に利用規約・プライバシーポリシーを必ずお読みください。 
                </p>
            </div>
            <div class="register-form">
                <div class="register-title">
                    <h1 class="title">利用規約・プライバシーポリシーについて</h1>
                </div>
                <div class="register-detail">
                    <div class="register-consent-form">
                        <p>利用規約・プライバシーポリシーに同意いただける方は「同意する」ボタンより会員情報入力画面へお進みください。 </p>
                        <div class="terms-of-service">
                            <div class="inline_box">
                                そんなものはない
                            </div>
                        </div>
                        <div class="consent-checkbox">
                            <input class="consent" type="checkbox" id="agree" />
                            <label for="agree">規約に同意する</label>
                        </div>
                    </div>
                    <form class="register-input-form" action="/ECsite_gbf/auth/register.php" method="post">
                        <div class="name-input-form">
                            <p>名前</p>
                            <input type="text" name="name" required>
                        </div>
                        <div class="mail-input-form">
                            <p>メールアドレス</p>
                            <input type="text" name="mail" required>
                        </div>
                        <div class="pass-input-form">
                            <p>パスワード</p>
                            <input type="password" name="pass" required>
                        </div>
                        <div class="input-btn">
                            <a class="toppage-btn" href="/ECsite_gbf/">トップページへ</a>
                            <input class="register-btn" id="submit-btn" type="submit" value="新規登録">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <?php include('../common/footer.php'); ?>

    
    <script src="/ECsite_gbf/js/checkbox.js"></script>
</body>
</html>