<?php
date_default_timezone_set("Asia/Tokyo");

$pdo = null;
$error_message = array();
$userName = 'root';
$password = 'spiral8810';
$items_array = array();
$goods_array = array();

try {
    //データベース接続
    $pdo = new PDO('mysql:charset=UTF8;dbname=ecsite_cystore;host=localhost', $userName, $password);
} catch (PDOException $e) {
    //接続エラーのときエラー内容を取得する
    $error_message[] = $e->getMessage();
}
//DBからコメントデータを取得する
if (!empty($pdo)) {
    // 「注目商品」の一覧取得
    $sql = "SELECT `id`, `image` FROM `featured_items`;";
    $items_array = $pdo->query($sql);
    // 「グッズ商品」の一覧取得
    $sql = "SELECT `id`, `image`, `name`, `price`, `category` FROM `goods_items`;";
    $goods_array = $pdo->query($sql);

} 

//DB接続を閉じる
$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.js "></script>
    
    <link href=" https://cdn.jsdelivr.net/npm/swiper@12.1.4/swiper-bundle.min.css " rel="stylesheet">
    
    <title>サイストア(笑)</title>
</head>
<body>
    <?php include('./common/header.php'); ?>
    <div class="main">
        <img class="main-image" src="images/mv_gbf_pc.webp" alt="">
        <div class="swiper-form">
            <?php if (!empty($items_array)) : ?>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach ($items_array as $value) : ?>
                        <div class="swiper-slide">
                            <img src="images/<?php echo $value['image']; ?>" alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="news-form">
        <a href="#">2025.12.03 「PayPay」決済対応開始のお知らせ</a>
    </div>
    <div class="related-items-form">
        <div class="title-form">
            <h2 class="title">Related Items</h2>
            <h3 class="sub-title">関連商品</h3>
        </div>
        <div class="items-form">
            <?php if (!empty($goods_array)) : ?>
                <?php foreach ($goods_array as $value) : ?>
                    <a href="#" class="item">
                        <img class="item-image" src="images/<?php echo $value['image']; ?>" alt="">
                        <p class="item-category"><?php echo $value['category']; ?></p>
                        <p class="item-name"><?php echo $value['name']; ?></p>
                        <p class="item-price">¥<?php echo number_format($value['price']); ?><span>(税込)</span></p>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <?php include('./common/footer.php'); ?>

    
    
    <script src="js/swiper.js"></script>
</body>
</html>