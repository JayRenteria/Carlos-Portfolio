// enclosing function to allow $ to be used in wordpress

(function($){

// normal jQuery code

//function offsetAnchor() {
//	if(location.hash.length !== 0) {
//		window.scrollTo(window.scrollX, window.scrollY - 75);
//	}
//}

//$(window).on("hashchange", function () {
//	offsetAnchor();
//});

// This is here so that when you enter the page with a hash,
// it can provide the offset in that case too. Having a timeout
// seems necessary to allow the browser to jump to the anchor first.
//
//window.setTimeout(function() {
//	offsetAnchor();
//}, 1);

	$("#controller").validate({
		// setup the formatting for the errors
		errorClass: "label-danger",
		errorLabelContainer: "#outputArea",

		// rules define what is good/bad input
		rules: {
			// each rule starts with the inputs name (NOT id)
			name: {
				maxlength: 100,
				required: true
			},

			message: {
				maxlength: 5000,
				required: true
			},

			email: {
				maxlength: 200,
				email: true,
				required: true
			},

			website: {
				maxlength: 300,
				url: true,
				required: false
			}

		},

		// error messages to display to the end user
		messages: {
			name: {
				maxlength: "Your name is really longer than 100 characters? ",
				required: "Please enter a name. "
			},

			message: {
				maxlength: "Don't copy the text of \"Infinite Jest\", please. ",
				required: "Please enter a message. "
			},

			email: {
				maxlength: "Your email is really longer than 200 characters? ",
				email: "Please enter a valid email address. ",
				required: "Please enter an email address. "
			},

			website: {
				maxlength: "Really? 300+ characters? ",
				url: "Please enter a valid URL. "
			}
		},

		submitHandler: function(form) {
			$(form).ajaxSubmit({
				// GET or POST
				type: "POST",
				// where to submit data
				url: "../index-controller.php",
				// TL; DR: reformat POST data
				data: $(form),
				// success is an event that happens when the server replies
				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#outputArea").css("display", "block");
					// write the server's reply to the output area
					$("#outputArea").html(ajaxOutput);

					// reset the form if it was successful
					// this makes it easier to reuse the form again
					if($(".alert-success").length >= 1) {
						$(form)[0].reset();
					}
				}
			});
		}
	});

// end code, close function

})(jQuery);