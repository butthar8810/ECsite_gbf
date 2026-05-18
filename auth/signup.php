<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ECsite_gbf/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.js "></script>
    
    <link href=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.css " rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <?php include('../common/header.php'); ?>

    <h1>新規会員登録</h1>
    <form action="/ECsite_gbf/auth/register.php" method="post">//処理を行う宛先を指定
    <div>
        <label>
            名前：
            <input type="text" name="name" required>
        </label>
    </div>
    <div>
        <label>
            メールアドレス：
            <input type="text" name="mail" required>
        </label>
    </div>
    <div>
        <label>
            パスワード：
            <input type="password" name="pass" required>
        </label>
    </div>
    <input type="submit" value="新規登録">
    </form>
    <p>すでに登録済みの方は<a href="/ECsite_gbf/auth/login.php">こちら</a></p>
    
    <?php include('../common/footer.php'); ?>
</body>
</html>