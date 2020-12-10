


$('ul.tab-list li a').on('click', function(event){

    event.preventDefault();

    const index = $(this).attr('data-index');

    $('ul.tab-list li').css('border', 'none');
    $('ul.tab-list li a').css('color', '#000');
    $(this).css('color', '#dc2d13');
    $(this).parent().css('border-bottom', '2px solid #dc2d13');

    $('.tab-container > .tab-content').css('display', 'none');
    $('.tab-container > .tab-' + index).css('display', 'block');
})


$('#booking_form').on('submit', function(event){

    let pickUp = $('#pickup-book').val();
    let dropOff = $('#dropoff-book').val();
    
    if (pickUp === '' && dropOff === '') {

        $('.error').eq(0).text('Pick-up required')
        $('.error').eq(1).text('Drop-off required')
        return false;
    }


    return true;
   
})