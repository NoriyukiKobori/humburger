<?php 
    get_header(); 
?>

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

            <?php
                if(have_posts()):

                        the_post(); ?>
                <p><?php the_content(); ?></p>

                <? else:
                    ?><p>表示する記事がありません</p><?php
                endif;
            ?>
            

    </main>

<?php get_footer(); ?>
<?php get_sidebar(); ?>