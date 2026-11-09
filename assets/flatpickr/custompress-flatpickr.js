(function(window) {
	'use strict';

	var tokens = {
		'DD': 'l',
		'MM': 'F',
		'dd': 'd',
		'mm': 'm',
		'yy': 'Y',
		'D': 'D',
		'M': 'M',
		'd': 'j',
		'm': 'n',
		'y': 'y'
	};

	window.ctDateFormatToFlatpickr = function(format) {
		var converted = '';
		var literal = false;

		for (var index = 0; index < format.length;) {
			if (format[index] === "'") {
				literal = !literal;
				index++;
				continue;
			}

			var pair = format.slice(index, index + 2);
			var token = !literal && tokens[pair] ? pair : format[index];
			var replacement = !literal && tokens[token] ? tokens[token] : token;
			converted += literal || !tokens[token] ? '\\' + replacement : replacement;
			index += token.length;
		}

		return converted;
	};

	window.ctCreateDatePicker = function(selector, format, options) {
		return window.flatpickr(selector, Object.assign({
			allowInput: true,
			dateFormat: window.ctDateFormatToFlatpickr(format)
		}, options || {}));
	};
})(window);