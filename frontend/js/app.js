jQuery(document).ready(function () {
	$('.ux-tab a.tablink').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})

});