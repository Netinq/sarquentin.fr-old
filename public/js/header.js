function display_header()
{
    $('.menu-m').show();
}

function hide_header()
{
    $('.menu-m').hide();
}

window.addEventListener('scroll', function(e) {

    if (window.scrollY >= 50 && !$('header').hasClass('header-scroll'))
    {
        $('header').addClass('header-scroll')
    }
    if (window.scrollY < 50 && $('header').hasClass('header-scroll'))
    {
        $('header').removeClass('header-scroll')
    }

});
