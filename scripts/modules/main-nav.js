var adjustMainNav = function(){
    var topMargin = $('.top-banner').innerHeight(),
        fixedClass = 'fixed-menu';
    
    if($(window).scrollTop() > topMargin){
        $('body').addClass(fixedClass);
        
    }
    else if($('body').hasClass(fixedClass)){
        $('body').removeClass(fixedClass);
    }
}

$('.hamburger, .main-nav').on('click',function(e){
    
    if (!$(e.target).is('.main-nav ul li a')){
        $('body').toggleClass('show-menu');
    }
});

$(window).scroll(function(){adjustMainNav();});
$(window).resize(function(){adjustMainNav();});