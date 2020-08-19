<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(  ); ?>
    <?php //theme checkエラー回避
        if(function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>
</head>
<body class="content" <?php body_class();?>>
    <header class="l-header">
        <a href="<?php echo esc_url( home_url( '/' ) ) ?>"><h1><?php bloginfo('name'); ?></h1></a>
 
        <!--スマホ用-->    
        <button class="c-button__menu">Menu</button>
        <!---->
    
        <?php get_search_form(); ?>

    </header>
    
