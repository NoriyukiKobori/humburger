jQuery(document).ready(function(){
        jQuery(function($){
            let timer = 0 //変数名 timerを定義
            jQuery('.c-button__menu').on('click', function(){
                $(".p-container__sidebar-menu").addClass("is-open"); //クラス.p-container__sidebarにクラスis-openを追加
            });
            jQuery('.c-button__close img').on('click', function(){
                $( ".p-container__sidebar-menu").removeClass( "is-open" );   
            });
            $(window).on("resize", function(){
                let pcWidth = 961;
                if( timer > 0 ){
                    clearTimeout(timer);
                }
                timer = setTimeout( function() {
                    let resizeWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                    if( resizeWidth >= pcWidth){
                        $( ".p-container__sidebar-menu").removeClass( "is-open" );
                    }
                }, 200 );
            });
        });
})
