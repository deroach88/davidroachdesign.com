/* ============================== */
/*  DOCUMENT READY
/* ============================== */

$(document).ready(function(){


/* ============================== */
/*  FUNCTIONS
/* ============================== */

	function contentMobile(){
		var windowWidth = $(window).width();

		$('.overview').css({
			left: -windowWidth
		});
	}

	function contentDesktop(){
		$('.overview-toggle').removeClass('active');
		$('.overview').removeClass('expand-mobile').css({
			left: '60px'
		});
	}

	function resetSidebar(){
		$('.nav-toggle').removeClass('active');
		$('#nav, #sidebar').removeClass('expand');
	}


/* ============================== */
/*  EXPAND/COLLAPSE
/* ============================== */

	/* Sidebar Toggle */

	$('.nav-toggle').on('click', function(){
		$(this).toggleClass('active');
		$('#nav, #sidebar').toggleClass('expand');
	});


	/* Overview Toggle */

	$('.overview-toggle').on('click', function(){
		$(this).toggleClass('active');
		$('.overview').toggleClass('expand-mobile');
	});


/* ============================== */
/*  WINDOW RESIZING
/* ============================== */

	$(window).resize(function(){
		if ($(window).width() < 768){
			contentMobile();
		}
		else {
			contentDesktop();
			resetSidebar();
		}
	});
});