<?php
$wp_query = get_related_posts();
if ( $wp_query->have_posts() ):
    ?>
    <h2 id="ed-5" class="topicRepo mt20">関連ページ</h2>
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
endif;
?>