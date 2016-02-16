//Ajax contact form
$(function() {

	// Get the form.
	var form = $('#contact-form');
	// Get the messages div.
	var formMessages = $('#form-output');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
		$("#form-submit").text("Enviando...");

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
			.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert alert-danger');
			$(formMessages).addClass('alert alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#location').val('');
			$('#phone').val('');
			$('#email').val('');
			$('#info').val('');
			$("#form-submit").text("Enviar");
		})
			.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
				$("#form-submit").text("Enviar");
			} else {
				$(formMessages).text('Oops! Ocurrió un error no se pudo enviar la forma.');
				$("#form-submit").text("Enviar");
			}
		});

	});

});

$(document).ready(function () {
	$(".colorbox-fade").colorbox({rel:'colorbox-fade', transition:"fade"});

	$('.modelo-carousel .carousel').carousel({
		interval: false
	});

	$isindex = $('.nav a').attr('href').substr(0, $('.nav a').attr('href').indexOf('#'));
	if ($isindex=='') {

		$('html,body').animate({
			scrollTop: $(window.location.hash).offset().top-122
		}, 'slow', 'swing');

	}


	// delegate calls to data-toggle="lightbox"
	$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			onShown: function() {
				if (window.console) {
					$('.ekko-lightbox').click(function () {
						$('.modal').modal('hide');
					});
					$('.ekko-lightbox .modal-content').click(function (e){
						e.stopPropagation();
					});
					$('.ekko-lightbox .close').click(function () {
						$('.modal').modal('hide');
					});
					setTimeout( function () { 
						$('#modal-close').animate({opacity : .2}, 200);
					}, 400);
				}
			},
			onNavigate: function(direction, itemIndex) {
				if (window.console) {
				}
			}
		});
	});

	//Programatically call
	$('#open-image').click(function (e) {
		e.preventDefault();
		$(this).ekkoLightbox();
	});
	$('#open-youtube').click(function (e) {
		e.preventDefault();
		$(this).ekkoLightbox();
	});

	// navigateTo
	$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
		event.preventDefault();

		var lb;
		return $(this).ekkoLightbox({
			onShown: function() {

				lb = this;

				$(lb.modal_content).on('click', '.modal-footer a', function(e) {

					e.preventDefault();
					lb.navigateTo(2);

				});

			}
		});
	});


	$('.ekko-lightbox').click(function () {
		$(this).modal.modal('hide');
	});

	$(".navLink").click( function (e) {
		//Prevents Default Behavior 
		e.preventDefault();
		// Calls Your Function with the URL from the custom data attribute 
		window.open($(this).data('url'), '_system');
	});

});