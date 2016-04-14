if ($('.hero-banner').length){
    
    var hero = $('.hero-banner').flickity({
        prevNextButtons: false,
        cellSelector: '.hero-banner-item',
        accessibility: true,
        wrapAround: true,
    });
    
}