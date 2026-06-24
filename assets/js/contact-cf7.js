/**
 * Contact Form 7 success handling.
 *
 * When CF7 reports the mail was sent (the `wpcf7mailsent` event), hide the
 * form and reveal the gradient "Thank you" panel — replicating the original
 * hand-built form's success state, but without a page reload.
 */
(function () {
	'use strict';

	document.addEventListener('wpcf7mailsent', function () {
		var section = document.getElementById('contact');
		if (!section) {
			return;
		}
		var formWrap = section.querySelector('.kc-cf7');
		var thanks = document.getElementById('kc-thanks');
		if (formWrap) {
			formWrap.style.display = 'none';
		}
		if (thanks) {
			thanks.style.display = 'block';
		}
		window.scrollTo({ top: section.offsetTop - 60, behavior: 'smooth' });
	}, false);
})();
