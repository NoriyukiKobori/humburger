<?php get_header(); ?>

    <main class="l-main">
        <section class="p-hero">
            <?php the_post_thumbnail(); ?>
            <h1 class=p-hero__category>
                <?php 
                    if(have_posts()){
                        the_title();
                    }
                ?>
            </h1>
        </section>
        <article class="p-articles">
            <div class="p-articles__single-content">  
                <?php
                    if(have_posts()):
                        while(have_posts(  )):
                            the_post(  );
                            the_content();
                        endwhile;
                    else:
                ?>
                        <p>表示する記事がありません</p>
                <?php
                    endif;
                ?>
            </div>
    </main>

<?php get_footer(); ?>
<?php get_sidebar(); ?>