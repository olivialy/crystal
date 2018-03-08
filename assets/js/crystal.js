$(function() {
    // headroom.js
    // handle .header show/hide animation
    $("#header").headroom({
        "offset": 50,
        "tolerance": 5,
        "classes": {
            initial:    'header',              // when element is initialised
            pinned:     'header-pinned',       // when scrolling up
            unpinned:   'header-unpinned',     // when scrolling down
            top:        'header-top',          // when above offset
            notTop:     'header-not-top',      // when below offset
            bottom:     'header-bottom',       // when at bottom of scoll area
            notBottom:  'header-not-bottom'    // when not at bottom of scroll area
        }
    });

    // open/close menu
    $('#open-menu').on('click', function (){
        $('#menu').addClass('rHeader-nav-open');
    });

    $('#close-menu').on('click', function (){
        $('#menu').removeClass('rHeader-nav-open');
    });

    // works
    $('#trigger-work-rows').on('click', function(e) {
        e.preventDefault();

        var $this = $(this);
        var showIndex = parseInt($(this).attr('data-show'));
        var maxIndex = parseInt($(this).attr('data-maxindex'));

        if (showIndex <= maxIndex) {
            // show items whose [data-index] value = showIndex
            var $targetRows = $('[data-index="' + showIndex + '"]', '#works');
            $targetRows.slideDown();

            // update [data-show] value to trigger next items
            $this.attr('data-show', showIndex + 1);

            // hide button if we've reached the last line
            if (showIndex == maxIndex) {
                $this.fadeOut();
            }
        }
    });

    // news
    $('#trigger-news').on('click', function(e) {
        e.preventDefault();

        $('.news-item.hidden', '#news').slideDown();
        $(this).fadeOut();
    });
})
