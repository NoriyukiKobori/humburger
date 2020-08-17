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
            <div class="p-articles__page-content">  
                <?php
                    if(have_posts()):
                        while(have_posts(  )):?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
                                the_post(  );
                                the_content(); ?>
                            </div> <?php
                        endwhile;
                    else:
                ?>
                        <p>表示する記事がありません</p>
                <?php
                    endif;
                ?>
            </div>
            <div class="p-articles__navigation">
                <?php wp_pagenavi(); ?>
            </div>
        </article> 
    </main>

<?php get_footer(); ?>
<?php get_sidebar(); ?>
