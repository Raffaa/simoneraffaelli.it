grecaptcha.ready(function() {
// do request for recaptcha token
// response is promise with passed token
	grecaptcha.execute('6LepnZsUAAAAAA9IXswcTjioYeHiTCOKWo-YG3UC', {action:'validate_captcha'})
			  .then(function(token) {
		// add token value to form
		document.getElementById('g-recaptcha-response').value = token;
	});
});