/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

jQuery.fn.valignMiddle = function(elem) {
    var h = jQuery(this).height();
    var h2 = jQuery(this).parent().height();
    var pad = (h2-h)/2;
    jQuery(this).css("padding-top", pad);
    jQuery(this).css("padding-bottom", pad);
}

$(".contact-box").valignMiddle();