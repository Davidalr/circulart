$('.buttonClose').on('click', function () {
    $( ".PopUpBlock" ).hide( "slow" );
});
$('#contact').on('click', function () {
    $( ".PopUpBlock" ).show( "slow" );
    return false;
});
$('.Menu-mobile').on('click', function () {
    $( ".Nav-mobile" ).toggleClass( "show" );
    $( this ).toggleClass( "show" );
    return false;
});
