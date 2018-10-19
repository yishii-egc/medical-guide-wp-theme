<nav id="global-nav">
    <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
    <div class="login">
        <p class="sentence">お薬通販部で薬を買う</p>
        <form method="GET" action="/login.php">
            <p>メールアドレス<br>
                <input type="text" name="login_id" value="" placeholder="例：xxxx@okusuri-shop.com" class="input11"/>
            </p>
            <p>パスワード<br>
                <input type="text" name="login_pass" value="" class="input11"/>
            </p>
            <div id="topBtnArea" class="clear">
                <input type="hidden" name="current_url" value="%%CURRENT_URL%%"/>
                <input type="submit" value="ログイン" class="login_btn1"/>
            </div>
        </form><!--//.login end//-->
    </div>

    <div class="passForeget">
        <p class="sentence">パスワードを忘れた場合</p>
        <span>登録した際のメールアドレスを入力してください。</span>
        <form action="./password.php" method="GET">
            <p>メールアドレス</p>
            <input type="text" name="email" value="" placeholder="例：xxxx@okusuri-shop.com" class="input11">
            <input type="hidden" name="link_url" value="">
            <input type="hidden" name="login_url" value="">
            <div>
                <input type="hidden" name="current_url" value="%%CURRENT_URL%%"/>
                <input type="submit" name="" value="パスワードを問い合わせる" class="formBtn">
            </div>
        </form>
    </div><!--//.passForeget end//-->

    <!--<div class="accountBox">
        <p class="sentence">初めてのお客様</p>
        <a class="account" href="/register.php">アカウント登録をする</a>
    </div>//.accountBox end//-->

    <div class="menuSide">
        <a class="topic">カテゴリー</a>
        <ul class="list">
            <li><a class="sub-topic" href="/item-list.php?category=set-Items">お得セット商品</a></li>
            <li><a class="sub-topic" href="/item-list.php?category=ED">ED治療薬</a></li>
            <li><a class="sub-topic" href="/item-list.php?category=PE">早漏改善・防止薬</a></li>
            <li><a class="sub-topic" href="/item-list.php?category=penis-enlargement">ペニス増大</a></li>
            <li><a class="sub-topic" href="/item-list.php?category=aphrodisiac">媚薬</a></li>
            <li><a class="sub-topic" href="/item-list.php?category=contraceptives">避妊薬・ピル</a></li>
            <li><a class="sub-topic" href="/item-list.php?category=AGA">男性薄毛・AGA治療薬</a></li>
        </ul>
    </div>

    <div class="menuSide">
        <a href="/medical-guide.php" class="topic">メディカルガイド</a>
        <ul>
            <li><a class="sub-topic" href="/medical-guide/?p=50">EDとは</a></li>
            <li><a class="sub-topic" href="/medical-guide/?p=53">ED治療薬とは</a></li>
        </ul>
    </div>

    <div class="menuSide">
        <a class="topic">ご利用ガイド</a>
        <ul>
            <li><a class="sub-topic" href="/about.php">お薬通販部とは</a></li>
            <li><a class="sub-topic" href="/shipping-process.php">お買い物手順</a></li>
            <li><a class="sub-topic" href="/payment.php">お支払い方法</a></li>
            <li><a class="sub-topic" href="/delivery.php">配送について</a></li>
            <li><a class="sub-topic" href="/receive-emails.php">メールが届かないお客様へ</a></li>
            <li><a class="sub-topic" href="/faq.php">よくある質問</a></li>
            <li><a class="sub-topic" href="/generic.php">ジェネリック医薬品について</a></li>
        </ul>
    </div>


    <div class="menuSide mb5">
        <a class="topic">インフォメーション</a>
        <ul>
            <li><a class="sub-topic" href="/terms-service.php">利用規約</a></li>
            <li><a class="sub-topic" href="/privacy-policy.php">プライバシーポリシー</a></li>
            <li><a class="sub-topic" href="/corporation.php">特定商取引法に基づく表記</a></li>
            <li><a class="sub-topic" href="/contact.php">お問い合わせ</a></li>
            <li><a class="sub-topic" href="/sitemap.php">サイトマップ</a></li>
        </ul>
    </div>


    <ul class="sns">
        <li><a href="https://twitter.com/okusuri_shop" target="_blank"><img src="/img/icon-twitter.png"
                                                                            alt="Twitter"></a></li>
        <li>
            <a href="https://www.facebook.com/%E3%81%8A%E8%96%AC%E9%80%9A%E8%B2%A9%E9%83%A8-1820859328000441/?modal=admin_todo_tour"
               target="_blank"><img src="/img/iconfacebook.png" alt="facebook"></a></li>
        <li><a href="https://plus.google.com/u/2/100130848790767879957" target="_blank"><img
                    src="/img/icongoogleplus.png" alt="Google+"></a></li>
        <li><a href="https://okusuri-shop.hatenablog.com/" target="_blank"><img src="/img/icon-hatena.png" alt="はてなブログ"></a>
        </li>
        <li><a href="http://blog.livedoor.jp/okusurishop/" target="_blank"><img src="/img/icon-livedoorblog.png"
                                                                                alt="ライブドアブログ"></a></li>
        <li><a href="http://okusurishop.blog.fc2.com/" target="_blank"><img src="/img/icon-fc2.png" alt="FC2ブログ"></a>
        </li>
    </ul>
    <ul class="snslist">
        <li><a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-lang="en"></a></li>
    </ul>


</nav>