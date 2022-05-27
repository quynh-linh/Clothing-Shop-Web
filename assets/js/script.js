// JavaScript Document
$(document).ready(function() {
    $('#lightSlider').lightSlider({
        autoWidth: true,
        loop: true,
        onSliderLoad: function() {
            $('#lightSlider').removeClass('app_suggestion');
        }
    });
});