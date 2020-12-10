
$('.select-current').on('click', function(event){

    $(this).next().toggleClass('active');
    
});

$('.select li').on('click', function(){

    const selected = $(this).text();
    $(this).parent().prev().find('span').text(selected);
})

$(document).on('click', function(event){

    if (!event.target.matches('.select-current')) {

        const ul = $('.select-current').next();

        if (ul.hasClass('active')) {

            ul.removeClass('active');
        }
        
    }

})

