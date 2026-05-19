    <link rel="stylesheet" href="/ECsite_gbf/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <footer>
        <div class="main-footer">
            <div class="main-rogo">
                <img src="/ECsite_gbf/images/logo_white.svg" alt="">
                <div class="sns">
                    <p>公式SNS</p>
                    <div class="sns-link">
                        <a href="https://x.com/Cygames_goods">
                            <i class="fa-brands fa-x-twitter sns-icon"></i>
                            @cygames_goods
                        </a>
                        <a href="https://www.instagram.com/cygames_goods/">
                            <i class="fa-brands fa-instagram sns-icon"></i>
                            @cygames_goods
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-link">
                <div class="footer-link-title">
                    <h2>Title <span>タイトルから探す</span></h2>
                    <hr class="footer-line">
                    <ul class="footer-link-title-list">
						<li><a href="#">グランブルーファンタジー</a></li>
                        <li><a href="#">Shadowverse</a></li>
                        <li><a href="#">プリンセスコネクト！Re:Dive</a></li>
                        <li><a href="#">ウマ娘 プリティーダービー</a></li>
                        <li><a href="#">ゾンビランドサガ</a></li>
                        <li><a href="#">神撃のバハムート</a></li>
                        <li><a href="#">サイコミ</a></li>
                        <li><a href="#">サイピク</a></li>
                    </ul>
                </div>
                <div class="footer-link-category">
                    <h2>Category <span>カテゴリーから探す</span></h2>
                    <hr class="footer-line">
                    <ul class="footer-link-category-list">
                        <li><a href="#">ゲームソフト</a></li>
                        <li><a href="#">Blu-ray・DVD</a></li>
                        <li><a href="#">CD</a></li>
                        <li><a href="#">フィギュア</a></li>
                        <li><a href="#">アクリルスタンド</a></li>
                        <li><a href="#">バッジ</a></li>
                        <li><a href="#">キーホルダー・ストラップ</a></li>
                        <li><a href="#">クリアファイル</a></li>
                        <li><a href="#">ぬいぐるみ</a></li>
                        <li><a href="#">アートボード</a></li>
                        <li><a href="#">ステッカー・シール・カード</a></li>
                        <li><a href="#">タペストリー・ポスター</a></li>
                        <li><a href="#">アームサポーター</a></li>
                        <li><a href="#">ブレードホルダー</a></li>
                        <li><a href="#">カードスリーブ・カード収納ケース</a></li>
                        <li><a href="#">ラバーマット・マウスパッド</a></li>
                        <li><a href="#">モバイルグッズ</a></li>
                        <li><a href="#">生活雑貨</a></li>
                        <li><a href="#">食品・飲料品</a></li>
                        <li><a href="#">食器</a></li>
                        <li><a href="#">食玩</a></li>
                        <li><a href="#">アパレル衣類</a></li>
                        <li><a href="#">アパレル小物</a></li>
                        <li><a href="#">アクセサリー</a></li>
                        <li><a href="#">文具</a></li>
                        <li><a href="#">書籍</a></li>
                        <li><a href="#">コミック・小説</a></li>
                        <li><a href="#">その他グッズ</a></li>
                        <li><a href="#">チケット</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-navigation">
                <div class="service-nav">
                    <h3>会員登録／サービス</h3>
                    <ul class="footer-navigation-list">
                        <?php if (!isset($_SESSION['id'])) : ?>
                            <li><a href="/ECsite_gbf/auth/login.php">ログイン</a></li>
                        <?php endif; ?>
                        <li><a href="#">マイページ</a></li>
                        <li><a href="#">メルマガ登録</a></li>
                    </ul>
                </div>
                <div class="support-nav">
                    <h3>サポート</h3>
                    <ul class="footer-navigation-list">
                        <li><a href="#">ご利用ガイド</a></li>
                        <li><a href="#">よくあるご質問</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </div>
                <div class="other-nav">
                    <h3>その他</h3>
                    <ul class="footer-navigation-list">
                        <li><a href="#">利用規約</a></li>
                        <li><a href="#">特定商取引法に基づく表示</a></li>
                        <li><a href="#">プライバシーポリシー</a></li>
                        <li><a href="#">Cookie 設定</a></li>
                    </ul>
                </div>
            </div>
            <p class="copylight">CyStoreは株式会社CygamesがBrandex株式会社に一部運営を委託しています。© Cygames, Inc. </p>
        </div>
    </footer>