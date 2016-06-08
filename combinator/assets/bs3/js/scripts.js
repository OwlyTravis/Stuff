$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


$('#reloadButton').on('click', function () {
	var $btn = $(this).button('loading');
	//$btn.button('reset')
})

