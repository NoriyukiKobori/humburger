<?php

    register_nav_menus();
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );

    function humburger_title($title){
        if(is_front_page() && is_home()){
            $title = get_bloginfo('name','display');
        }elseif(is_singular()){
            $title = single_post_title('',false);
        }
        return $title;
    }
    add_filter('pre_get_document_title','humburger_title' );

    function humburger_script(){
        wp_enqueue_style('Roboto','https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',array());
        wp_enqueue_style('mplus1p','http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css',array());
        wp_enqueue_style('ress','https://unpkg.com/ress/dist/ress.min.css',array());
        wp_enqueue_style('style',get_template_directory_uri() .'/css/style.css',array());
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
        wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array('jquery'),true);
    }
    add_action('wp_enqueue_scripts', 'humburger_script');

    add_filter( 'show_admin_bar', '__return_false' );