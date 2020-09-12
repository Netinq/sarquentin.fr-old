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

        if (refElement.position().top <= scrollPos + ($(this).height() / 3) && refElement.position().top + refElement.height() > scrollPos + ($(this).height() / 3) && refElement.children().hasClass('hide'))
        {
            refElement.children().removeClass('hide');
        }
    });
}
