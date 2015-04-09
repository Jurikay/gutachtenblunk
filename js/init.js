

(function($) {

	skel.init({
		reset: 'full',
		breakpoints: {
			'global':	{ range: '*', href: 'css/style.css', containers: 960, grid: { gutters: 40 }, viewport: { scalable: false } },
			'wide':		{ range: '-9880', href: 'css/style-wide.css', containers: 960, grid: { gutters: 40 } },
			'normal':	{ range: '-1930', href: 'css/style-normal.css', containers: 880, grid: { gutters: 40 } },
			'narrow':	{ range: '-1620', href: 'css/style-narrow.css', containers: 780, grid: { gutters: 20 } },
			'narrower':	{ range: '-900', href: 'css/style-narrower.css', containers: '95%!', grid: { gutters: 20 } },
			'mobile':	{ range: '-600', href: 'css/style-mobile.css', containers: '100%!', grid: { collapse: true } }
		},	
	});
	$(function() {
		var	$window = $(window),
			$body = $('body');		
		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');	
			$window.on('load', function() {
				$body.removeClass('is-loading');
			});			
		// CSS polyfills (IE<9).
			if (skel.vars.IEVersion < 9)
				$(':last-child').addClass('last-child');
		// Forms (IE<10).
			var $form = $('form');
			if ($form.length > 0) {
				$form.find('.form-button-submit')
					.on('click', function() {
						$(this).parents('form').submit();
						return false;
					});
				if (skel.vars.IEVersion < 10) {
					$.fn.n33_formerize=function(){var _fakes=new Array(),_form = $(this);_form.find('input[type=text],textarea').each(function() { var e = $(this); if (e.val() == '' || e.val() == e.attr('placeholder')) { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).blur(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).focus(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); _form.find('input[type=password]').each(function() { var e = $(this); var x = $($('<div>').append(e.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, 'type=text')); if (e.attr('id') != '') x.attr('id', e.attr('id') + '_fakeformerizefield'); if (e.attr('name') != '') x.attr('name', e.attr('name') + '_fakeformerizefield'); x.addClass('formerize-placeholder').val(x.attr('placeholder')).insertAfter(e); if (e.val() == '') e.hide(); else x.hide(); e.blur(function(event) { event.preventDefault(); var e = $(this); var x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } }); x.focus(function(event) { event.preventDefault(); var x = $(this); var e = x.parent().find('input[name=' + x.attr('name').replace('_fakeformerizefield', '') + ']'); x.hide(); e.show().focus(); }); x.keypress(function(event) { event.preventDefault(); x.val(''); }); });  _form.submit(function() { $(this).find('input[type=text],input[type=password],textarea').each(function(event) { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) e.attr('name', ''); if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); }).bind("reset", function(event) { event.preventDefault(); $(this).find('select').val($('option:first').val()); $(this).find('input,textarea').each(function() { var e = $(this); var x; e.removeClass('formerize-placeholder'); switch (this.type) { case 'submit': case 'reset': break; case 'password': e.val(e.attr('defaultValue')); x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } else { e.show(); x.hide(); } break; case 'checkbox': case 'radio': e.attr('checked', e.attr('defaultValue')); break; case 'text': case 'textarea': e.val(e.attr('defaultValue')); if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } break; default: e.val(e.attr('defaultValue')); break; } }); window.setTimeout(function() { for (x in _fakes) _fakes[x].trigger('formerize_sync'); }, 10); }); return _form; };
					$form.n33_formerize();
				}
			}
		// Scrolly links.
			$('.scrolly').scrolly();
		// Nav.
			var $nav_a = $('#nav a');
			// Scrolly-fy links.
				$nav_a
					.scrolly()
					.on('click', function(e) {
						var t = $(this),
							href = t.attr('href');						
						if (href[0] != '#')
							return;					
						e.preventDefault();					
						// Clear active and lock scrollzer until scrolling has stopped
							$nav_a
								.removeClass('active')
								.addClass('scrollzer-locked');				
						// Set this link to active
							t.addClass('active');				
					});
			// Initialize scrollzer.
				var ids = [];				
				$nav_a.each(function() {
					var href = $(this).attr('href');			
					if (href[0] != '#')
						return;
					ids.push(href.substring(1));
				});
				$.scrollzer(ids, { pad: 70, lastHack: true });
	});
})(jQuery);