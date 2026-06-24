/**
 * TEDx countdown timer.
 *
 * Mirrors the Claude Design export: counts down to the event datetime
 * (local time) and updates the Days / Hrs / Min / Sec readouts each second.
 */
(function () {
	'use strict';

	var data = window.KCS_DATA || {};
	var target = new Date(data.eventDateTime || '2026-06-26T18:00:00').getTime();
	if (isNaN(target)) {
		return;
	}

	var elDays = document.getElementById('kc-cd-days');
	var elHours = document.getElementById('kc-cd-hours');
	var elMins = document.getElementById('kc-cd-mins');
	var elSecs = document.getElementById('kc-cd-secs');

	if (!elDays || !elHours || !elMins || !elSecs) {
		return;
	}

	function pad(n) {
		return String(n).padStart(2, '0');
	}

	function tick() {
		var diff = Math.floor((target - Date.now()) / 1000);
		if (diff < 0) {
			diff = 0;
		}
		elDays.textContent = pad(Math.floor(diff / 86400));
		elHours.textContent = pad(Math.floor((diff % 86400) / 3600));
		elMins.textContent = pad(Math.floor((diff % 3600) / 60));
		elSecs.textContent = pad(diff % 60);
	}

	tick();
	setInterval(tick, 1000);
})();
