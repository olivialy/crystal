$(function() {
    var $featuredItem = $('.featured-item', '#featured');

    $featuredItem.hover(
        function() {
            $(this).addClass('featured-item-on');
            $(this).siblings().addClass('featured-item-off');
        },function() {
            $(this).removeClass('featured-item-on');
            $(this).siblings().removeClass('featured-item-off');
        }
    );
})
