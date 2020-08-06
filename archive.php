<?php get_header(); ?>

    <main class="l-main">
        <section class="p-hero">
            <img src="<?= get_template_directory_uri(); ?>/images/archive_img01.jpg" alt="ハンバーガーの写真">
            <h1 class=p-hero__category>Menu:
                <?php
                    if(is_category()){
                        echo single_cat_title(); 
                    }elseif(is_tag()){
                        echo single_tag_title();
                    }
                ?>
            </h1>
        </section>
        <article class="p-articles">
            <div class="p-articles__text-area">
                <h2>小見出しが入ります</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>          
            <?php
                if(have_posts())   : 
                    while(have_posts()): 
                        the_post(); 
            ?>
                        <div class="p-card">
                            <div class="p-card__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="p-card__text-area">
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <?php the_content(); ?>
                                <div class="c-button__to-page">
                                    <button class="c-button__to-page-button" onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</button>
                                </div>
                            </div>
                        </div>

            <?php 
                    endwhile;
                else:
            ?>
                    <p>表示する記事がありません</p>
            <?php
                endif;
            ?>       
    </main>

<?php get_footer(); ?>
<?php get_sidebar(); ?>
