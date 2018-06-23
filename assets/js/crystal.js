$(function() {
    var windowWidth = window.innerWidth,
        $body = $('body'),
        $rMain = $('.rMain'),
        $header = $('#header'),
        $menu = $('#menu'),
        $keyfigures = $('#keyfigures'),
        counted = false;

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

    // handle .scrolltip show/hide animation
    if (windowWidth > 767) {
        $("#scrolltip").headroom({
            "offset": 50,
            "tolerance": 5,
            "classes": {
                initial: 'scrolltip',              // when element is initialised
                pinned: 'scrolltip-pinned',       // when scrolling up
                unpinned: 'scrolltip-unpinned',     // when scrolling down
                top: 'scrolltip-top',          // when above offset
                notTop: 'scrolltip-not-top',      // when below offset
                bottom: 'scrolltip-bottom',       // when at bottom of scoll area
                notBottom: 'scrolltip-not-bottom'    // when not at bottom of scroll area
            }
        });
    }

    // open/close menu
    $('#open-menu').on('click', function (){
        $menu.addClass('rHeader-nav-open');
        $body.css('overflow', 'hidden');
        $header.css('opacity', 1);
    });

    $('#close-menu').on('click', function (){
        $menu.removeClass('rHeader-nav-open');
        $body.removeAttr('style');
        $header.removeAttr('style');
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

    // material key figures counters
    $(window).on('scroll', function(){
        if ($keyfigures.length && $keyfigures.offset().top <= $(window).scrollTop() + $(window).height() * .95 && !counted) {
            counted = true;
            $('.keyfigures-counter', $keyfigures).each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    });

    // showcase: page: make right col sticky
    if (windowWidth > 767 && $("#showcase-sticky").length) {
        $("#showcase-sticky").stick_in_parent();
    }

    // showcase: open in modal
    function toggleModal($modal) {
        // open/close modal
        // + allow/disallow body scroll
        if ($modal.is('[aria-hidden]')) {
            $rMain.css('overflow', 'hidden');
            $modal.removeAttr('aria-hidden');

            if ($modal.hasClass('modal-video')) {
                $('#videoplaceholder').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/LzLWxziqD_w?rel=0&showinfo=0&autoplay=true&wmode=transparent&mute=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
            }

        } else {
            $modal.attr('aria-hidden', true);
            $rMain.removeAttr('style');

            if ($modal.hasClass('modal-video')) {
                $('#videoplaceholder').html('');
            }

        }
    }

    $body.on('click', '[data-modal]', function(e) {
        var target = $(this).attr('data-modal'),
            $target = $(target);

        if($target.length) {
            e.preventDefault();
            toggleModal($target);
        }

    });

    // news
    $('#trigger-news').on('click', function(e) {
        e.preventDefault();

        $('.news-item.hidden', '#news').slideDown();
        $(this).fadeOut();
    });
})
