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

$(".logo-footer img").valignMiddle();
$(".custom-button p").valignMiddle();
//$("#text-block .what_is-icon img").valignMiddle();



ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [55.0122,82.9534],
            zoom: 12
        }),

        myPlacemark = new ymaps.Placemark([55.0369,82.9204], {
            hintContent: 'Собственный значок метки'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/tag.svg',
            iconImageSize: [30, 42],
            iconImageOffset: [-3, -42]
        }),

        myPlacemark2 = new ymaps.Placemark([54.9862,82.9008], {
            hintContent: 'Собственный значок метки'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/tag.svg',
            iconImageSize: [30, 42],
            iconImageOffset: [-3, -42]
        }),

        myPlacemark3 = new ymaps.Placemark([55.0122,82.9534], {
            hintContent: 'Собственный значок метки'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/tag.svg',
            iconImageSize: [30, 42],
            iconImageOffset: [-3, -42]
        });
	myMap.behaviors.disable('scrollZoom');
    myMap.geoObjects.add(myPlacemark);
    myMap.geoObjects.add(myPlacemark2);
    myMap.geoObjects.add(myPlacemark3);
});

