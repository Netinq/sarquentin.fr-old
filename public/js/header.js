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

$(document).ready(function () {
    $(document).on("scroll", onScroll);
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#menu a').each(function () {
        var currLink = $(this);
        var refElement;
        try {
            refElement= $(currLink.attr("href"));
        } catch (error) {

        }
        if (refElement.position() == null || refElement.position() == undefined ) return;
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu a div').removeClass("menu-selected");
            currLink.children().addClass("menu-selected");
        }
        else{
            currLink.children().removeClass("menu-selected");
        }
    });
}
