<?php

    register_nav_menus();
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' ); //RSSのフィードリンクを有効にする

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
        wp_enqueue_style('style',esc_url(get_template_directory_uri()) .'/css/style.css',array());
        wp_enqueue_style('style', esc_url(get_template_directory_uri()) . '/style.css', array(), '1.0.0');
        wp_enqueue_script('menu', esc_url(get_template_directory_uri()) . '/js/menu.js', array('jquery'),true);
    }
    add_action('wp_enqueue_scripts', 'humburger_script');

    add_filter( 'show_admin_bar', '__return_false' );

    //アーカイブでは投稿順に表示させる
    function my_pre_get_posts($query){
        if(is_category()){
            $query->set('order' , 'ASC');
        }
    }
    add_action( 'pre_get_posts', 'my_pre_get_posts' );

    //メインメニューとサブメニューを使い分けれるようにする
    register_nav_menus( array(
        'mainmenu' =>__( 'Mein Menu', 'humburger' ),
        'secondary' =>__( 'Sub Menu' , 'humburger' )
    ));

    //author情報を非表示
    function disable_author_archive_query() {
        if( preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING']) ){
            wp_redirect( home_url() );
            exit;
        }
        }
        add_action('init', 'disable_author_archive_query');

    //theme checkエラー回避

    if ( ! isset( $content_width ) ) {
        $content_width = 960;
    }

