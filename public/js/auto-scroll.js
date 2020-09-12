let index = 0;

function animatethis() {

    $('#scroll-reviews').width()
    const max = $('#scroll-reviews').children().length;

    $('#scroll-reviews').animate({ scrollLeft: $('#scroll-reviews').width()*(index) });
    if (index == (max-1) ) index = 0;
    else index++;
};
setInterval(animatethis, 5000);
