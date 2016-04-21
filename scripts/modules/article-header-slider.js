if ($('.article-header-slideshow').length){
    
    var hero = $('.article-header-slideshow').flickity({
        prevNextButtons: true,
        cellSelector: '.article-header-slideshow-item',
        accessibility: true,
        wrapAround: true,
    });
    
}