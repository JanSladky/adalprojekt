
 /*Projetky script*/

$('.main-content').find('dd').hide();
$('.main-content dt').on("click", function () {
	$(this).next().slideToggle()
		   .siblings('dd').slideUp();
});
/*hamburger menu script a logo fadeIn*/
$(document).ready(function () {
	/*logo zobrazení*/
	$('.logo').hide().fadeIn(2000);
	/*zobrazení uvodních stránek*/
	$('.main-content').hide().fadeIn(1000);
	/*Ul seznam */
	$('#adal').hide().fadeIn(1000);
	$('#members').hide().delay(2000).fadeIn();
	$('#cile, .hashtag').hide()
		.delay(1000)
		.slideDown(1000);
	});



/*card members*/
var card = $('.card'); //tohle je hlavička
var cardText = $('.card-text');   // toto je obsah


card.on('click', function() {
	var findCardText = $(this).find(cardText);
	cardText.stop().slideUp(500);
	findCardText.stop().slideToggle(500);

});
