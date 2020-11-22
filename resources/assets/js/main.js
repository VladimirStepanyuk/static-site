var user_lang = navigator.language || navigator.userLanguage;
var go_to = 'action.php?de';

$(document).ready(function() {
	
});

function push_link() {
	$('.signup-btn').attr('href', go_to + '&first_name=' + $('#first_name2').val() + '&last_name=' + $('#last_name2').val() + '&email=' + $('#email2').val() + '&country_code=' + $('#country_code2').val() + '&phone=' + $('#phone2').val());
}

$('#activation2').click(function() {
	push_link();
	$('#pixel-container').html($('#px').val());
});

$('#first_name2, #last_name2, #email2, #phone2').blur(function() {
	push_link();
});

$('#cookies-btn').click(function(e) {
	e.preventDefault();
	$('#cookies-overlay').addClass('hidden');
	$('#container').removeClass('blur');
});

$('.link').click(function(e) {
	e.preventDefault();
	$('#overlay').removeClass('hidden');
	$('body').css('overflow', 'hidden');
});

$('.close-overlay').click(function(e) {
	e.preventDefault();
	$('#overlay').addClass('hidden');
	$('body').css('overflow', 'auto');
});