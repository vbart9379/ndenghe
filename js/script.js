$(document).on('click', 'a', function (event) {
    

    if (!($(this).attr('href') === './privacy.html')) {
        
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#form').offset().top - 65
        }, 1000);
    }
    
})