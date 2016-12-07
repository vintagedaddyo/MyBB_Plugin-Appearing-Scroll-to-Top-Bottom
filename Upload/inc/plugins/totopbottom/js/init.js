   
$(document).ready(function(){
    appear();
    $(window).scroll(function(){
       appear();
    });                    
    function appear() {
        if ($(this).scrollTop() > 200) {
           $('#scroll_up').fadeIn('slow');
        } else {
           $('#scroll_up').fadeOut('slow');
        }
        if ($(this).scrollTop() < ($('html, body').height() - (200+$(window).height()))) {
            $('#scroll_dn').fadeIn('slow');
        } else {
            $('#scroll_dn').fadeOut('slow');
        }
    };
    $('#scroll_up').click(function(){
        $('html, body').stop().animate({scrollTop: 0}, 600);
    });
    $('#scroll_dn').click(function(){
                    $('html, body').stop().animate({scrollTop:$('html, body').height()}, 600);
                    });
                });    



