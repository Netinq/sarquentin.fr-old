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

$(document).ready(function () {
    $(document).on("scroll", scrollHide);
});

function scrollHide(event) {

    var scrollPos = $(document).scrollTop();

    $('section').each(function () {
        var refElement = $(this);
        scrollPos += ($(this).height() / 3);
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos)
        {
            refElement.children().removeClass('hide');
        }
    });
}
