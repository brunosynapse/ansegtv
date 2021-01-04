$(function () {
    $(".item-noticia").slice(0, 4).show();
    $("#load-more-news").on('click', function (e) {
        e.preventDefault();
        $(".item-noticia:hidden").slice(0, 4).slideDown();
        if ($(".item-noticia:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 200);
    });
});
