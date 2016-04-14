$('.cta-button').click(function(){
    $('.cta-section').addClass('cta-active');
    $('html, body').animate( {scrollTop : $('.cta-section').offset().top}, 500);
    $('input[name=name]').focus();
    formJsInit();
});