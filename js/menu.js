jQuery(document).ready(function(){
        jQuery(function($){
            let timer = 0 //変数名 timerを定義
            jQuery('.c-button__menu').on('click', function(){
                $(".p-container__sidebar-menu").addClass("is-open"); //クラス.p-container__sidebarにクラスis-openを追加
                $(".l-sidebar").addClass("is-open"); 
                $("#close-button").addClass("is-open");
                $(".content").addClass("no-scroll"); 
            });
            jQuery('.c-button__close img').on('click', function(){
                $( ".p-container__sidebar-menu").removeClass( "is-open" );
                $(".l-sidebar").removeClass("is-open"); 
                $("#close-button").removeClass("is-open"); 
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
                        $( ".p-container__sidebar-menu").removeClass( "is-open" );
                        $(".l-sidebar").removeClass( "is-open" );
                        $("#close-button").removeClass("is-open"); 
                        $(".content").removeClass("no-scroll");
                    }
                }, 200 );
            });
        });
})
