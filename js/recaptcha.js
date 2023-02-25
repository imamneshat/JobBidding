

			$("#click-btn").click(function(e) {
			  var $captcha = $("#recaptcha"),
			    response = grecaptcha.getResponse();

			  if (response.length === 0) {
			    $(".msg-error").text("reCAPTCHA is mandatory");
			    if (!$captcha.hasClass("error")) {
			      $captcha.addClass("error");
			      e.preventDefault();
			    }
			  } else {
			    $(".msg-error").text("reCAPTCHA marked");
			    
			  }
			});