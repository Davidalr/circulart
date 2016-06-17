$('.buttonClose').on('click', function () {
    $( ".PopUpBlock" ).hide( "slow" );
});
$('#contact').on('click', function () {
    $( ".PopUpBlock" ).show( "slow" );
    return false;
});