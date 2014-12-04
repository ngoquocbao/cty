$(document).ready(function () {
    $('.bxslider').bxSlider({
        auto: true,
        autoControls: false
    });
    $("#sorterTable").tablesorter();
    $("#resetButton").click(function () {
        window.location.reload();
    });
    $('#successAlert').delay(2000).fadeOut();
    $('#failAlert').delay(2000).fadeOut();    
});