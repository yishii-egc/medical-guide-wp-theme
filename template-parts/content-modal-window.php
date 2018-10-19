
<!--//モーダルウィンドウ//-->
<div id="modal">
    <div id="order_tell">
        <a href="#" class="close_overlay">×</a>
        <div class="modalWindow modalLogin">
            <h2>お電話での注文はこちら</h2>
            <p class="tellNo1">050-5806-4632</p>
            <p class="tellNo2">10:00～18:00 (年中無休)</p>
            <p class="tellAtte"><span class="red">注文専用の電話番号です。</span>ご注文以外（商品の追跡確認など）については、「<a href="/contact.php">お問い合わせ</a>」よりお問い合わせください。<br>また、薬機法の関係で、商品の効果・副作用はお答えできませんので、ご了承ください。</p>
            <a href="#!" class="modalClose"></a>
        </div><!--//.modalWindow//-->
    </div><!--/#order_tell end//-->

    <div id="pass_foreget">
        <a href="#" class="close_overlay">×</a>
        <div class="modalWindow modalLogin">
            <h2>パスワードを忘れた場合</h2>
            <p>登録した際のメールアドレスを入力してください。</p>
            <form action="/password.php" method="GET">
                <span>メールアドレス</span>
                <input type="text" name="email" value="" placeholder="例：xxxx@okusuri-shop.com" class="input12">
                <input type="hidden" name="link_url"  value="">
                <input type="hidden" name="login_url" value="">
                <div>
                    <input type="hidden" name="current_url" value="%2Fmedical-ED1.php" />
                    <input type="submit" name="" value="パスワードを問い合わせる" class="formBtn">
                </div>
            </form>
            <a class="square_btn" href="#login_window">ログイン画面を開く</a>
            <!--<div class=""><a class="close" href="#">×</a></div>-->
            <a href="#!" class="modalClose"></a>
        </div><!--//.modalWindow//-->
    </div><!--//#pass_foreget end//-->

    <div id="login_window">
        <a href="#" class="close_overlay">×</a>
        <div class="modalWindow modalLogin">
            <h2>ログイン</h2>
            <p>登録した際のメールアドレス、パスワードを入力してください。</p>
            <form method="GET" action="/login.php">
                <p>メールアドレス<br>
                    <input type="text" name="login_id" value="" placeholder="例：xxxx@okusuri-shop.com" class="input11" />
                </p>
                <p>パスワード<br>
                    <input type="text" name="login_pass" value="" class="input11" />
                </p>
                <div id="topBtnArea" class="clear">
                    <input type="hidden" name="current_url" value="%2Fmedical-ED1.php" />

                    <input type="submit" value="ログイン" class="btnG" />
                </div>
            </form>
            <a href="#!" class="modalClose"></a>
        </div><!--//.modalWindow//-->
    </div><!--//#login_window end//-->



    <div id="login_error">
        <a href="#" class="close_overlay">×</a>
        <div class="modalWindow modalLogin">
            <h2>ログイン</h2>
            <p>ログインに失敗しました。<br>メールアドレス、パスワードにお間違いがないかご確認の上、再度ログインして下さい。</p>
            <form method="GET" action="login.php">
                <p>メールアドレス<br><input type="text" name="login_id" value="" placeholder="例：xxxx@okusuri-shop.com" class="input11" /></p>
                <p>パスワード<br><input type="text" name="login_pass" value="" class="input11" /></p>
                <div id="topBtnArea" class="clear"><input type="submit" value="ログイン" class="login_btn1" /></div>
            </form>
            <a href="#!" class="modalClose"></a>
        </div><!--//.modalWindow//-->
    </div><!--/#login_error end//-->

</div><!--/#modal-->

