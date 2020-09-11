window.addEventListener('scroll', function(e) {

    if (window.scrollY < 50 && $('header').is(":visible"))
    {
        $('#top').hide();
    }
    if (window.scrollY >= 50 && $('header').is(":hidden"))
    {
        $('#top').show();
    }

});
