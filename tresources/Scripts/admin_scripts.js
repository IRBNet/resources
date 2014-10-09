$(document).ready(function() {
	$("#faq_content_link").on('click', function(e) {
		e.preventDefault();
		$("#general_resources_link").removeClass("active_faq_menu_item");
		$(this).addClass("active_faq_menu_item");
		$("#general_resources").hide();
		$("#faq_content").show();
	});

	$("#general_resources_link").on('click', function(e) {
		e.preventDefault();
		$("#faq_content_link").removeClass("active_faq_menu_item");
		$(this).addClass("active_faq_menu_item");
		$("#faq_content").hide();
		$("#general_resources").show();
	});
})