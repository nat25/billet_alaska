// Menu responsive 
$('#hamburger').show();
$('#menu').hide();
$('#cross').hide();
$('#hamburger').on('click', function(){
	$('#hamburger').hide();
	$('#cross').show();
	$('#menu').show();
});
$('#cross').on('click', function(){
	$('#cross').hide();
	$('#hamburger').show();
	$('#menu').hide();
});