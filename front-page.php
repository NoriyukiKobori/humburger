<?php get_header(); ?>
    <main class="l-main">
        <section class="p-hero">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/index_img01.jpg" alt="">
            <h2>ダミーサイト</h2>
        </section>
        <article class="p-articles">
            <div class="p-articles__branch">
                <div class="p-articles__branch__left">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/index_img02.jpg" alt="">
                    <div class="p-articles__branch__box">
                        <a href=<?php echo get_category_link(8); ?>><h2><?php echo get_cat_name(8); ?></h2></a>
                        <hr>
                    </div>
                    <div>
                        <dl>
                            <dt><h3>小見出しが入ります</h3></dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                        <dl>
                            <dt><h3>小見出しが入ります</h3></dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                    </div>  
                </div>
                <div class="p-articles__branch__right">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/index_img03.jpg" alt="">
                    <div class="p-articles__branch__box">
                    <a href=<?php echo get_category_link(7); ?>><h2><?php echo get_cat_name(7); ?></h2></a>
                        <hr>
                    </div>
                    <div>
                        <dl>
                            <dt><h3>小見出しが入ります</h3></dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                        <dl>
                            <dt><h3>小見出しが入ります</h3></dt>
                            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                        </dl>
                    </div>  
                </div>
            </div>
        </article>
        <section class="p-access">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/index_img04.jpg" alt="地図画像">
            <div>
                <h2>見出しが入ります</h2>
                <hr>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>    
           
        </section>
    </main>

<?php get_footer(); ?>
<?php get_sidebar(); ?>
