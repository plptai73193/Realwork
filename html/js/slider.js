var $slideFadeTimer = {};

function slideFadeStart(elm) {
	var $this = elm,
		__idx__ = $('.slide-fade').index($this),
		$duration = typeof $this.attr('data-duration') != 'undefined' ? parseInt($this.attr('data-duration')) : 1000,
		$timer = typeof $this.attr('data-timer') != 'undefined' ? parseInt($this.attr('data-timer')) : 4000,
		$delay = typeof $this.attr('data-delay') != 'undefined' ? parseInt($this.attr('data-delay')) : false;

	if ($timer < $duration) $timer = $duration * 2;

	$this.removeClass('stop');
	if (!$this.children('.active').length) {
		$this.children().hide();
		$this.children().eq(0).show().addClass('active');

		if ($this.siblings('.slide-page').length) $this.siblings('.slide-page').children().eq(0).addClass('active');
	} else {
		if ($this.siblings('.slide-page').length)
			$this.siblings('.slide-page').children().eq($this.children('.active').index()).addClass('active');
	}

	// $slideFadeTimer[__idx__] = setInterval(function() {
	// slideFade($this, $duration);
	// }, $timer);

	$this.parents('.slideParent').addClass('move-start').attr('data', $this.children('.active').index());

	if ($slideFadeTimer[__idx__]) clearTimeout($slideFadeTimer[__idx__]);
	$slideFadeTimer[__idx__] = setTimeout(function() {
		slideFade($this, $duration);
	}, $delay ? $delay : $timer);
}

function slideFade(elm, duration) {
	var elmActive = elm.children('.active'),
		slideContinue = elm.hasClass('stop') || (elm.hasClass('once') && elmActive.next().length < 1) ? false : true;

	if (slideContinue) {
		var __idx__ = $('.slide-fade').index(elm),
			timer = typeof elm.attr('data-timer') != 'undefined' ? parseInt(elm.attr('data-timer')) : 4000;

		if (elmActive.next().length) {
			if (typeof elmActive.next().attr('data-duration') != 'undefined')
				duration = parseInt(elmActive.next().attr('data-duration'));
		} else {
			if (typeof elm.children().eq(0).attr('data-duration') != 'undefined')
				duration = parseInt(elm.children().eq(0).attr('data-duration'));
		}

		if ($slideFadeTimer[__idx__]) clearTimeout($slideFadeTimer[__idx__]);

		elmActive.stop().fadeOut(duration, function() {
			$(this).removeClass('active').removeAttr('style').hide();
		});

		elm.parents('.slideParent').removeClass('move-start move-next move-prev move-first move-last');

		if (elmActive.next().length > 0) {
			if (typeof elmActive.next().attr('data-timer') != 'undefined')
				timer = parseInt(elmActive.next().attr('data-timer'));
			if (timer < duration) timer = duration * 2;

			if (elm.siblings('.slide-page').length > 0) {
				elm.siblings('.slide-page').children('.active').removeClass('active');
				elm.siblings('.slide-page').children().eq(elmActive.next().index()).addClass('active');
			}

			elm.parents('.slideParent').addClass('move-next').attr('data', elmActive.next().index());
			if (elmActive.next().is(':last-child')) elm.parents('.slideParent').addClass('move-last');

			elmActive.next().stop().fadeIn(duration, function() {
				$(this).addClass('active').removeAttr('style').show();

				if (elm.siblings('.slide-btn').hasClass('clicked'))
					elm.siblings('.slide-btn.clicked').removeClass('clicked');
				if (elm.siblings('.slide-page').hasClass('clicked'))
					elm.siblings('.slide-page.clicked').removeClass('clicked');

				if ($(this).next().length < 1 && elm.hasClass('once')) elm.addClass('slide-finished');

				$slideFadeTimer[__idx__] = setTimeout(function() {
					slideFade(elm, duration);
				}, timer);
			});
		} else {
			if (typeof elm.children().eq(0).attr('data-timer') != 'undefined')
				timer = parseInt(elm.children().eq(0).attr('data-timer'));
			if (timer < duration) timer = duration * 2;

			if (elm.siblings('.slide-page').length > 0) {
				elm.siblings('.slide-page').children('.active').removeClass('active');
				elm.siblings('.slide-page').children().eq(0).addClass('active');
			}

			elm.parents('.slideParent').addClass('move-first').attr('data', 0);

			elm.children().eq(0).stop().fadeIn(duration, function() {
				$(this).addClass('active').removeAttr('style').show();

				if (elm.siblings('.slide-btn').hasClass('clicked'))
					elm.siblings('.slide-btn.clicked').removeClass('clicked');
				if (elm.siblings('.slide-page').hasClass('clicked'))
					elm.siblings('.slide-page.clicked').removeClass('clicked');

				if ($(this).next().length < 1 && elm.hasClass('once')) elm.addClass('slide-finished');

				$slideFadeTimer[__idx__] = setTimeout(function() {
					slideFade(elm, duration);
				}, timer);
			});
		}
	} else elm.addClass('slide-finished');
}
if ($('.slide-fade').length > 0) {
	$('.slide-fade').each(function() {
		var $this = $(this),
			__idx__ = $('.slide-fade').index($this),
			$duration =
				typeof $this.attr('data-duration') != 'undefined' ? parseInt($this.attr('data-duration')) : 1000,
			$timer = typeof $this.attr('data-timer') != 'undefined' ? parseInt($this.attr('data-timer')) : 4000,
			$delay = typeof $this.attr('data-delay') != 'undefined' ? parseInt($this.attr('data-delay')) : false;

		if ($timer < $duration) $timer = $duration * 2;

		if (!$this.children('.active').length > 0) {
			$this.children().hide();
			$this.children().eq(0).show().addClass('active');

			if ($this.siblings('.slide-page').length > 0)
				$this.siblings('.slide-page').children().eq(0).addClass('active');
		} else {
			if ($this.siblings('.slide-page').length > 0)
				$this.siblings('.slide-page').children().eq($this.children('.active').index()).addClass('active');
		}

		if ($(this).siblings('.slide-page').length > 0) {
			$(this).siblings('.slide-page').children().each(function(i) {
				$(this).attr('data', i);
			});
		}

		if (!$(this).hasClass('stop')) {
			// $slideFadeTimer[__idx__] = setInterval(function() {
			// slideFade($this, $duration);
			// }, $timer);

			$(this).parents('.slideParent').addClass('move-start').attr('data', $this.children('.active').index());

			if ($slideFadeTimer[__idx__]) clearTimeout($slideFadeTimer[__idx__]);
			$slideFadeTimer[__idx__] = setTimeout(function() {
				slideFade($this, $duration);
			}, $delay ? $delay : $timer);
		}
	});

	/*
         * TODO:
         * --- removeClass/addClass
         * .move-next
         * .move-prev
         * .move-first
         * .move-last
         *
         */

	$('body').on('click', '.slide-btn > .slide-next', function() {
		var $btn = $(this),
			$this = $btn.parent().siblings('.slide-fade'),
			__idx__ = $('.slide-fade').index($this),
			$duration =
				typeof $this.attr('data-duration') != 'undefined' ? parseInt($this.attr('data-duration')) : 1000,
			$timer = typeof $this.attr('data-timer') != 'undefined' ? parseInt($this.attr('data-timer')) : 4000;

		if ($timer < $duration) $timer = $duration * 2;

		if (!$btn.hasClass('clicked') && !$this.hasClass('stop')) {
			// if ($slideFadeTimer[__idx__]) clearInterval($slideFadeTimer[__idx__]);
			if ($slideFadeTimer[__idx__]) clearTimeout($slideFadeTimer[__idx__]);

			$btn.addClass('clicked');

			$this.children('.active').stop().fadeOut($duration, function() {
				$(this).removeClass('active').removeAttr('style').hide();
			});

			if ($this.children('.active').next().length) {
				$this.children('.active').next().stop().fadeIn($duration, function() {
					$(this).addClass('active').removeAttr('style').show();
					$btn.removeClass('clicked');

					// $slideFadeTimer[__idx__] = setInterval(function() {
					$slideFadeTimer[__idx__] = setTimeout(function() {
						$this.siblings('.slide-btn').children('.slide-next').click();
					}, $timer);
				});
			} else {
				if (!$this.hasClass('once')) {
					$this.children().eq(0).stop().fadeIn($duration, function() {
						$(this).addClass('active').removeAttr('style').show();
						$btn.removeClass('clicked');

						// $slideFadeTimer[__idx__] = setInterval(function() {
						$slideFadeTimer[__idx__] = setTimeout(function() {
							$this.siblings('.slide-btn').children('.slide-next').click();
						}, $timer);
					});
				}
			}
		}
	});
	$('body').on('click', '.slide-btn > .slide-prev', function() {
		var $btn = $(this),
			$this = $btn.parent().siblings('.slide-fade'),
			__idx__ = $('.slide-fade').index($this),
			$duration =
				typeof $this.attr('data-duration') != 'undefined' ? parseInt($this.attr('data-duration')) : 1000,
			$timer = typeof $this.attr('data-timer') != 'undefined' ? parseInt($this.attr('data-timer')) : 4000;

		if ($timer < $duration) $timer = $duration * 2;

		if (!$btn.hasClass('clicked') && !$this.hasClass('stop')) {
			// if ($slideFadeTimer[__idx__]) clearInterval($slideFadeTimer[__idx__]);
			if ($slideFadeTimer[__idx__]) clearTimeout($slideFadeTimer[__idx__]);

			$btn.addClass('clicked');

			$this.children('.active').stop().fadeOut($duration, function() {
				$(this).removeClass('active').removeAttr('style').hide();
			});

			if ($this.children('.active').prev().length) {
				$this.children('.active').prev().stop().fadeIn($duration, function() {
					$(this).addClass('active').removeAttr('style').show();
					$btn.removeClass('clicked');

					// $slideFadeTimer[__idx__] = setInterval(function() {
					$slideFadeTimer[__idx__] = setTimeout(function() {
						$this.siblings('.slide-btn').children('.slide-next').click();
					}, $timer);
				});
			} else {
				$this.children().last().stop().fadeIn($duration, function() {
					$(this).addClass('active').removeAttr('style').show();
					$btn.removeClass('clicked');

					// $slideFadeTimer[__idx__] = setInterval(function() {
					$slideFadeTimer[__idx__] = setTimeout(function() {
						$this.siblings('.slide-btn').children('.slide-next').click();
					}, $timer);
				});
			}
		}
	});

	$('body').on('click', '.slide-page > *', function() {
		var $page = $(this).parent(),
			$idx = $(this).index(),
			$this = $(this).parents('.slideParent').length
				? $(this).parents('.slideParent').find('.slide-fade')
				: $(this).siblings('.slide-fade'),
			__idx__ = $('.slide-fade').index($this),
			$duration =
				typeof $this.attr('data-duration') != 'undefined' ? parseInt($this.attr('data-duration')) : 1000,
			$timer = typeof $this.attr('data-timer') != 'undefined' ? parseInt($this.attr('data-timer')) : 4000;

		if ($timer < $duration) $timer = $duration * 2;

		if ($this.length) {
			if (!$page.hasClass('clicked') && !$this.hasClass('stop')) {
				if ($(this).siblings('.active').length > 0) {
					var idxOld = parseInt($(this).siblings('.active').attr('data')),
						idxNew = parseInt($(this).attr('data')),
						beside = idxOld - idxNew === 1 || idxNew - idxOld === 1;

					$(this).parents('.slideParent').removeClass('move-start move-next move-prev move-first move-last');

					if (idxNew > idxOld) {
						$(this).parents('.slideParent').addClass('move-next').attr('data', idxNew);

						if ($(this).is(':last-child')) $(this).parents('.slideParent').addClass('move-last');
					} else {
						$(this).parents('.slideParent').addClass('move-prev').attr('data', idxNew);

						if ($(this).is(':first-child')) $(this).parents('.slideParent').addClass('move-first');
					}
				}

				if ($this.children().eq($idx).length > 0) {
					if ($slideFadeTimer[__idx__]) clearTimeout($slideFadeTimer[__idx__]);

					$this.siblings('.slide-page').children('.active').removeClass('active');
					$(this).addClass('active');

					$page.addClass('clicked');

					$this.children('.active').stop().fadeOut($duration, function() {
						$(this).removeClass('active').removeAttr('style').hide();
					});

					$this.children().eq($idx).stop().fadeIn($duration, function() {
						$(this).addClass('active').removeAttr('style').show();
						$page.removeClass('clicked');

						// $slideFadeTimer[__idx__] = setInterval(function() {
						// slideFade($this, $duration);
						// }, $timer);

						$slideFadeTimer[__idx__] = setTimeout(function() {
							slideFade($this, $duration);
						}, $timer);
					});
				} else console.info('Slide not found');
			}
		} else console.info('.slideParent or .slide-fade not found!');
	});
}
