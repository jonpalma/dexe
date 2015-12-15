$(document).ready(function () {
	$('#datepicker').datepicker();
	$(".colorbox-fade").colorbox({rel:'colorbox-fade', transition:"fade"});

	$("#video-modal").on('hidden.bs.modal', function (e) {
		$("#video-modal iframe").attr("src", $("#video-modal iframe").attr("src"));
	});
});