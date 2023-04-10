$('.period-selector').click(function(){
    
    var selected = $(this).attr('id');
    
    $('.period-selector').removeClass('active');
    
    $('#'+selected).addClass('active');
    
});