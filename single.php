<?php
get_header();
?>
<?php get_template_part('template-parts/content', 'mobile-nav'); ?>
    <div id="container">
        <div id="wrap">
            <div id="contents">
                <main>

                    <ol class="breadcrumb">
                        <li><a href="/"><span>お薬通販部トップ</span></a></li>
                        <li><a href="/medical-guide/"><span>メディカルガイド</span></a></li>
                        <li><?php the_breadcrumbs() ?></li>

                    </ol><!--//breadcrumb end//-->

                    <h1 class="topicBig"><?php the_title() ?></h1>
                    <div class="feature-image">
                        <?php the_thumbnail_alt('large') ?>
                    </div>
                    <article class="documents">
                      <div class="article-content">
                      <?php the_article_content(); ?>
                      </div>

                    </article><!--/ article end /-->

                </main><!--/ main end /-->

                <?php get_template_part('template-parts/content', 'right-menu'); ?>

            </div><!--//#contents end//-->

            <!--//モーダルウィンドウ//-->
            <?php get_template_part('template-parts/content', 'modal-window'); ?>

        </div><!--//#wrap end//-->
        <div id="action-toolbar-mobile" class="s-action-toolbar">
            <div class="boxT">
                <a class="icon01" href="/cart.php">カートを見る</a>
                <a class="icon02" href="/contact.php">お問い合わせ</a>
                <a class="icon03" href="#login_window">ログイン</a>
            </div>
        </div>
        <p id="page-top"><a href="#wrap">トップへ</a></p>
    </div><!--/#container end/-->
<?php get_footer();
