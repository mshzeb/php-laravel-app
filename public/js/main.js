
		var html = document.documentElement;
		var theme = html.getAttribute('data-PPCash-theme') || 'light';
		var variants = { "logo": { "light": { "src": false, "srcset": false, "sizes": false }, "dark": { "src": false, "srcset": false, "sizes": false }, "same": true } };

		function setCurrentTheme(theme) {
			var pictures = document.getElementsByClassName('PPCash-site-logo');
			for (var i = 0; i < pictures.length; i++) {
				var picture = pictures.item(i);
				if (!picture) {
					continue;
				};
				var fileExt = picture.src.slice((Math.max(0, picture.src.lastIndexOf(".")) || Infinity) + 1);
				if (fileExt === 'svg') {
					picture.removeAttribute('width');
					picture.removeAttribute('height');
					picture.style = 'width: var(--maxwidth)';
				}
				var compId = picture.getAttribute('data-variant');
				if (compId && variants[compId]) {
					var isConditional = variants[compId]['same'];
					if (theme === 'light' || isConditional || variants[compId]['dark']['src'] === false) {
						picture.src = variants[compId]['light']['src'];
						picture.srcset = variants[compId]['light']['srcset'] || '';
						picture.sizes = variants[compId]['light']['sizes'];
						continue;
					};
					picture.src = variants[compId]['dark']['src'];
					picture.srcset = variants[compId]['dark']['srcset'] || '';
					picture.sizes = variants[compId]['dark']['sizes'];
				};
			};
		};

		var observer = new MutationObserver(function (mutations) {
			mutations.forEach(function (mutation) {
				if (mutation.type == 'attributes') {
					theme = html.getAttribute('data-PPCash-theme');
					setCurrentTheme(theme);
				};
			});
		});

		observer.observe(html, {
			attributes: true
		});