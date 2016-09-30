$(function() {
    /*******************MENU DE APLICACIÖN***********************************/
    $('.menu .sub-trigger').click(function(){
            var submenu=$(this).next();
            $('.menu .open').removeClass('open');
            $('.submenu').slideUp('fast');
             /****Si el contenido viene de Ajax debe ser cargado aqiui*/
            submenu.slideDown('fast');
            $(this).parent().addClass('open')
    });
    
    $('#content').jScrollPane();
    
});

