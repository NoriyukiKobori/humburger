<div class="l-sidebar">
    <h2>Menu</h2>
        
            <!--スマホ用-->    
            <button class="c-button__close">
                <img id="close-button" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon_close.png" alt="">       
            </button>
            <!---->

            <?php wp_nav_menu( array('theme_location' => 'mainmenu' , 'menu_class' => 'nav-menu')); ?>


</div>
        