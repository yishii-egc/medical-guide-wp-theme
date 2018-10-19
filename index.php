<?php
get_header(); ?>
    <div id="container">
        <div id="wrap">
            <div id="contents">
                <main>
                    <ol class="breadcrumb">
                        <li><a href="/"><span>お薬通販部トップ</span></a></li>
                        <li><a href="/medecal-guide/"><span>メディカルガイドtest</span></a></li>
                    </ol><!--//breadcrumb end//-->
                    <article class="documents">
                        <h1 class="topicBig">メディカルガイド</h1>
                        <section>
                          <ul id="mediBig">
                            <?php
                            $wp_query = get_pickup_posts();
                            if ( $wp_query->have_posts() ):
                                ?>
                                <?php
                                while ( $wp_query->have_posts() ) :
                                    $wp_query->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <p><?php the_category_title() ?></p>
                                            <p class="image ed1">
                                                <?php the_thumbnail_alt('favorite') ?>
                                            </p>
                                            <p><?php echo truncateText(getTextContent(), 100) ?></p>
                                        </a>
                                    </li>
                                    <?php endwhile; ?>
                                    <li>
                                      <a href="//okusuri-shop.com/item-list.php?category=ED#medical">
                                        <p>ED治療薬とは</p>
                                        <p class="image">
                                          <img src="//okusuri-shop.com/img/medical/medical-EDtherapy1.jpg" class="attachment-favorite size-favorite wp-post-image" alt="">
                                        </p>
                                        <p>ED治療薬・勃起薬・精力剤の違い、効果作用、どんな人に合っているか、バイアグラなどED治療薬の種類、気になる副作用や注意事項、精力増強剤について、正しい飲み方、入手方法、自分に合った薬の選び方などを解説しています</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="//okusuri-shop.com/item-list.php?category=ED&sub_category=Viagra#medical">
                                        <p>バイアグラとは</p>
                                        <p class="image">
                                          <img src="//okusuri-shop.com/img/medical/medical-Viagra1.jpg" class="attachment-favorite size-favorite wp-post-image" alt="">
                                        </p>
                                        <p>世界で初めて承認されたED治療薬バイアグラの効果・副作用・有効成分シルデナフィル・服用方法・ジェネリック医薬品・通販など全てを説明しています。バイアグラの全てを理解して勃起不全を改善しましょう。</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="//okusuri-shop.com/item-list.php?category=ED&sub_category=Cialis#medical">
                                        <p>シアリスとは</p>
                                        <p class="image">
                                          <img src="//okusuri-shop.com/img/medical/medical-Cialis1.jpg" class="attachment-favorite size-favorite wp-post-image" alt="">
                                        </p>
                                        <p>バイアグラ・レビトラの後に開発された第3のED治療薬として、世界シェア率トップを誇る医薬品です。効果、副作用、服用方法、有効成分タダラフィル、ジェネリック医薬品、購入方法など全てを説明しています。</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="//okusuri-shop.com/item-list.php?category=ED&sub_category=Levitra#medical">
                                      <p>レビトラとは</p>
                                      <p class="image">
                                        <img src="//okusuri-shop.com/img/medical/medical-Levitra1.jpg" class="attachment-favorite size-favorite wp-post-image" alt="">
                                      </p>
                                      <p>世界100か国で使用されている実績を誇るレビトラの、効果効能、服用方法、副作用、有効成分、注意事項、レビトラジェネリック、購入方法を知って、ED治療に役立てましょう。</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="//okusuri-shop.comitem-list.php?category=ED&sub_category=Spedra#medical">
                                      <p>ステンドラとは</p>
                                      <p class="image">
                                        <img src="//okusuri-shop.com/img/medical/medical-Spedra1.jpg" class="attachment-favorite size-favorite wp-post-image" alt="">
                                      </p>
                                      <p>第4のED治療薬として開発されたアジア人向けの勃起薬です。有効成分アバナフィル、効果、服用方法、副作用、他のED薬との違い、ジェネリック医薬品、購入方法などを詳しく知って勃起不全を解消しましょう。</p></a>
                                    </li>
                                    <li>
                                      <a href="//okusuri-shop.com/medical-Sildenafil1.php">
                                      <p>シルデナフィルとは</p>
                                      <p class="image">
                                        <img src="//okusuri-shop.com/img/medical/medical-Sildenafil1.jpg" class="attachment-favorite size-favorite wp-post-image" alt="">
                                      </p>
                                      <p>シルデナフィルとは、世界初のED治療薬であるバイアグラの有効成分です。シルデナフィルの作用機序、効果効能、含有する商品、服用方法、副作用、併用注意、併用禁忌、入手方法などシルデナフィルの全てを紹介しています。</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="//okusuri-shop.com/medical-Tadalafil1.php">
                                      <p>タダラフィルとは</p>
                                      <p class="image">
                                        <img src="//okusuri-shop.com/img/medical/medical-tadalafil1.jpg" class="attachment-favorite size-favorite wp-post-image" alt="">
                                      </p>
                                      <p>第3のED治療薬シアリスの有効成分です。タダラフィルの作用機序や効果、含有する医薬品、服用方法、副作用、注意事項、併用禁忌、確実な入手方法などを知って、充実したナイトライフを送りましょう。</p>
                                      </a>
                                    </li>
                                </ul>
                            <?php
                            else :
                                get_template_part('template-parts/content', 'none');
                            endif;
                            ?>
                        </section><!--//section end//-->


                        <section>
                            <?php foreach (get_main_categories() as $category) : ?>
                                <h2 class="topicMedi"><?php echo $category->name ?></h2>
                                <?php
                                $wp_query = get_posts_by_category($category->term_id);
                                if ( $wp_query->have_posts() ):
                                    ?>
                                    <ul class="mediMiddTop">
                                        <?php
                                        while ( $wp_query->have_posts() ) :
                                            $wp_query->the_post();
                                            ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>">
                                                    <p>
                                                        <?php the_thumbnail_alt('article') ?>
                                                    </p>
                                                    <p><?php echo truncateText(get_the_title(), 100) ?></p>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php
                                else :
                                    get_template_part('template-parts/content', 'none');
                                endif;
                            endforeach; ?>
                        </section><!----><!--//section end//-->
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

<?php get_template_part('template-parts/content', 'mobile-nav'); ?>
<?php get_footer();
