$(function() {
    var $featuredItem = $('.featured-item', '#featured');

    $featuredItem.hover(
        function() {
            $(this).addClass('featured-item-on');
            $(this).siblings().addClass('featured-item-off');
        }, function() {
            $(this).removeClass('featured-item-on');
            $(this).siblings().removeClass('featured-item-off');
        }
    );

    $('#trigger-work-rows').on('click', function(e) {
        e.preventDefault();

        var $this = $(this);
        var showIndex = parseInt($(this).attr('data-show'));
        var maxIndex = parseInt($(this).attr('data-maxindex'));

        if (showIndex <= maxIndex) {
            // show items whose [data-index] value = showIndex
            var $targetRows = $('[data-index="' + showIndex + '"]');
            $targetRows.slideDown();

            // update [data-show] value to trigger next items
            $this.attr('data-show', showIndex + 1);

            // hide button if we've reached the last line
            if (showIndex == maxIndex) {
                $this.fadeOut();
            }
        }
    });

})
