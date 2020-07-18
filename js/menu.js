jQuery(document).ready(function(){
        jQuery(function($){
            let timer = 0 //変数名 timerを定義
            jQuery('.c-button__menu').on('click', function(){
                $(".p-container__sidebar-menu, .l-sidebar, #close-button, #smoke-layer").addClass("is-open");
                $(".content").addClass("no-scroll"); 
            });
            jQuery('.c-button__close img').on('click', function(){
                $(".p-container__sidebar-menu, .l-sidebar, #close-button, #smoke-layer").removeClass( "is-open" );
                $(".content").removeClass("no-scroll");
            });
            $(window).on("resize", function(){
                let pcWidth = 962;
                if( timer > 0 ){
                    clearTimeout(timer);
                }
                timer = setTimeout( function() {
                    let resizeWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                    if( resizeWidth >= pcWidth){
                        $(".p-container__sidebar-menu, .l-sidebar, #close-button, #smoke-layer").removeClass( "is-open" );
                        $(".content").removeClass("no-scroll");
                    }
                }, 200 );
            });
        });
})
