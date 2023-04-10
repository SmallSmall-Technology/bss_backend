
$('input[type=checkbox]').change(
    function(){
        if (this.checked) {
            //Hide percentages
            $('.toggle-slider').removeClass('toggle-slider-percent');
            $('.toggle-slider').addClass('toggle-slider-naira');
            $('.percentage-wrapper').hide();
            $('.naira-wrapper').show();
        }else{
            //return to percentages
            $('.toggle-slider').removeClass('toggle-slider-naira');
            $('.toggle-slider').addClass('toggle-slider-percent');
            $('.naira-wrapper').hide();
            $('.percentage-wrapper').show();
        }

});
