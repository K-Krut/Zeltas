$(document).ready(function () {
    $(".product-box").hover(
        function () {
            $(this).addClass('product-bg-appear');
            $(this).removeClass('product-bg-fade');
            $(this).find('.details').stop(true, true).css({'opacity': '1'})
            $(this).find('.product-title').stop(true, true).css({'opacity': '.7'})
        },
        function () {
            $(this).addClass('product-bg-fade');
            $(this).removeClass('product-bg-appear');
            $(this).find('.details').stop(true, true).css({'opacity': '.2'})
            $(this).find('.product-title').stop(true, true).css({'opacity': '.2'})
        }
    );
});
