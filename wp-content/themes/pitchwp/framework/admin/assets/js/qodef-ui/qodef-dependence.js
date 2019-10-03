(function($){
	'use strict';
	
	$(document).ready(function() {
		qodefInitSelectChange();
	});

	function qodefInitSelectChange() {
		$(document).on('change', 'select.dependence', function () {
			var valueSelected = this.value.replace(/ /g, '');
			$($(this).data('hide-'+valueSelected)).fadeOut();
			$($(this).data('show-'+valueSelected)).fadeIn();
		});
	}
})(jQuery);
