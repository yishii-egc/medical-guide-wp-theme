<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116684669-1"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <style type="text/css">
        <!--
        .mediMiddTop li p {font-weight: normal;}
        -->
    </style>
</head>
<body class="page-medical-guide">



<noscript>
    <p>このページは JavaScript を使用しています。<br>
        お使いのブラウザーは JavaScript が無効になっているか、JavaScript に対応していません。<br>
        適切にこのページ表示する場合は、JavaScriptを有効にするか、JavaScriptに対応しているブラウザでご覧下さい。</p>
</noscript>
<header id="header">
    <div id="headNav">
        <div class="L"><a href="<?= MAIN_SITE_URL ?>/"><img src="/img/base/logo1.png" alt="お薬通販部"></a></div>
        <div class="R">
            <div id="headRT" class="s-action-toolbar">
                <div class="boxT none">
                    <a class="icon01" href="<?= MAIN_SITE_URL ?>/cart.php">カートを見る</a>
                    <a class="icon02" href="<?= MAIN_SITE_URL ?>/contact.php">お問い合わせ</a>
                    <a class="icon03" href="#login_window">ログイン</a>
                </div>

            </div><!--//#headRT end//-->
        </div><!--//.R end//-->
        <a href="#" id="header-btn-menu" class="btn-menu">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div><!--//#headNav end//-->
</header>


<nav id="header-nav">
    <div id="navBox">

        <div class="navL">
            <div class="nav-menu">
                <ul class="main-cate">
                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=set-Items" class="mainbg">お得セット商品 <i class="fa fa-caret-down cGainsboro size14" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="navL" style="padding-left: 0;">
            <div class="nav-menu" style="margin-left: 0;">
                <ul class="main-cate">
                    <li><a href="" class="mainbg">商品カテゴリー <i class="fa fa-caret-down cGainsboro size14" aria-hidden="true"></i></a>
                        <ul class="sub-wrap" style="display: none; overflow: visible;">
                            <li>
                                <a href="<?= MAIN_SITE_URL ?>/item-list.php?category=ED">ED治療薬</a>
                                <ul class="sub-cate" style="display: none;">
                                    <!--<li class="comment">説明</li>-->
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=ED&sub_category=Viagra">バイアグラ</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=ED&sub_category=Cialis">シアリス</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=ED&sub_category=Levitra">レビトラ</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=ED&sub_category=Spedra">ステンドラ</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=ED&sub_category=supplement">EDサプリ</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=ED&sub_category=frigidity-improvement">不感症改善</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="<?= MAIN_SITE_URL ?>/item-list.php?category=PE">早漏改善・防止薬</a>
                                <ul class="sub-cate" style="display: none;">
                                    <!--<li class="comment">説明</li>-->
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=PE&sub_category=Priligy">プリリジー</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=PE&sub_category=lidocain">リドカイン</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=PE&sub_category=supplement">早漏サプリ</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="<?= MAIN_SITE_URL ?>/item-list.php?category=penis-enlargement">ペニス増大</a>
                                <ul class="sub-cate" style="display: none;">
                                    <!--<li class="comment">説明</li>-->

                                </ul>
                            </li>

                            <li>
                                <a href="<?= MAIN_SITE_URL ?>/item-list.php?category=aphrodisiac">媚薬</a>
                                <ul class="sub-cate" style="display: none;">
                                    <!--<li class="comment">説明</li>-->
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=aphrodisiac&sub_category=oral-solution">液体タイプ</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=aphrodisiac&sub_category=tablet">錠剤タイプ</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=aphrodisiac&sub_category=embrocation">塗布タイプ</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="<?= MAIN_SITE_URL ?>/item-list.php?category=contraceptives">避妊薬・ピル</a>
                                <ul class="sub-cate" style="display: none;">
                                    <!--<li class="comment">説明</li>-->
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=contraceptives&sub_category=low-dose-pill">低用量ピル</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=contraceptives&sub_category=ultra-low-dose-pill">超低用量ピル</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=contraceptives&sub_category=morning-after-pill">アフターピル</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=contraceptives&sub_category=device">避妊具</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="<?= MAIN_SITE_URL ?>/item-list.php?category=AGA">男性薄毛・AGA治療薬</a>
                                <ul class="sub-cate" style="display: none;">
                                    <!--<li class="comment">説明</li>-->
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=AGA&sub_category=Propecia">プロペシア</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=AGA&sub_category=Zagallo">ザガーロ</a></li>
                                    <li><a href="<?= MAIN_SITE_URL ?>/item-list.php?category=AGA&sub_category=minoxidil">ミノキシジル</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="<?= MAIN_SITE_URL ?>/item-list.php?category=set-Items">お得セット商品</a>
                                <ul class="sub-cate" style="display: none;">
                                    <!--<li class="comment">説明</li>-->

                                </ul>
                            </li>


                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navC">
            <ul class="navRB">
                <li><a href="<?= MAIN_SITE_URL ?>/medical-guide/" class="icon09">メディカルガイド</a>
                    <ul>
                        <li><a href="<?= MAIN_SITE_URL ?>/medical-guide/?p=50">EDとは</a></li>
                        <li><a href="<?= MAIN_SITE_URL ?>/medical-guide/?p=53">ED治療薬とは</a></li>
                    </ul>
                </li>
                <li><a class="icon04">ご利用ガイド</a>
                    <ul>
                        <li><a href="<?= MAIN_SITE_URL ?>/about.php">お薬通販部とは</a></li>
                        <li><a href="<?= MAIN_SITE_URL ?>/shipping-process.php">お買い物手順</a></li>
                        <li><a href="<?= MAIN_SITE_URL ?>/payment.php">お支払い方法</a></li>
                        <li><a href="<?= MAIN_SITE_URL ?>/delivery.php">配送について</a></li>
                        <li><a href="<?= MAIN_SITE_URL ?>/receive-emails.php">メールが届かないお客様へ</a></li>
                        <li><a href="<?= MAIN_SITE_URL ?>/faq.php">よくある質問</a></li>
                    </ul>
                </li>
            </ul><!--//ul.navRB end//-->
        </div>

        <div class="navR">
            <form action="/item-list.php" name="search" method="get">
                <dl class="search">
                    <dt><input type="text" name="keyword" value="" placeholder="何かお探しですか？" /></dt>
                    <dd><button></button></dd>
                </dl>
            </form>
        </div><!--//.navR end//-->
    </div><!--//.navBox end//-->
</nav><!--//ナビ//-->
