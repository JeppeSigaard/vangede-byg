$('a').on('click',function(e){
    if($(this).attr('href') === '#'){
        e.preventDefault();
    }
});