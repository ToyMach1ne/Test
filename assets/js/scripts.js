//Add class to checkbox
$('#checkbox__field--wrap label').change(function() {
    $(this).toggleClass("active_label");
  });

//Open form
$('.hidden__button--form').on('click', function() {
	$('.main__form--wrap').fadeIn();
})

$('.close__form').on('click', function() {
	$('.main__form--wrap').fadeOut();
})